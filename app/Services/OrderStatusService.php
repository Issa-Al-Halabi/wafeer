<?php

namespace App\Services;

use Filament\Forms\Components\Wizard\Step;
use App\Enums\StatusInputsTypes;
use App\Helpers\NotificationHelper;
use App\Models\OrderStatus;
use App\Models\Status;
use Filament\Forms\Components\Placeholder;

class OrderStatusService
{
    public function getFormCurrentStep($record)
    {
        $statuses_count = $record->statuses()->count();

        // If The statuses_count Is Equal To The Statuses Of The Same Type
        // That Means That The Order Is Completed
        if ($statuses_count == Status::where("order_type", $record->type)->count()) {
            return $statuses_count;
        }
        return $statuses_count + 1;
    }

    public function getTypeSteps($record)
    {
        $statuses = Status::where("order_type", $record->type)
            ->take($record->statuses()->count() + 1)->get();

        $steps = [];
        $i = 1;

        foreach ($statuses as $status) {
            $steps[] = Step::make('status_' . $status->id)
                ->label("الخطوة " . $i)
                // When Pressing Next Step We Need To Update The Data
                ->afterValidation(function ($state) use ($record, $status) {
                    $this->getStepNextAction($state, $record, $status);
                })
                // Get This Step's Form
                ->schema($this->getStepForm($status->id));
            $i++;
        }

        return  $steps;
    }

    public function getStepForm($status_id)
    {
        $status =  Status::find($status_id);
        $inputs = [];

        $inputs[] = Placeholder::make('title_' . $status_id)
            ->label("")
            ->content($status->title);
        // Loop Through The Specifications Of The Status To Generate The Input Based On Its (type,label)
        foreach (array_keys($status->specifications) as $specification_key) {
            $inputs[] = StatusInputsTypes::getInput($status->specifications[$specification_key], $specification_key, $status_id);
        }
        return  $inputs;
    }
    public function getOldData($record)
    {
        $statuses = $record->statuses;
        $old_data = [];
        foreach ($statuses as $status) {
            foreach (array_keys($status->specifications) as $specification_key) {
                $key = StatusInputsTypes::getInputName($status->status->specifications[$specification_key]["type"], $specification_key, $status->status->id);
                $old_data[$key] = $status->specifications[$specification_key];
            }
        }
        return $old_data;
    }
    public function getStepNextAction($state, $record, $status)
    {
        $specifications = [];
        foreach ($state as $key => $value) {
            // Get specificate_key and status_id From The Input Name
            [, $specificate_key, $status_id] = StatusInputsTypes::desolveInputName($key);

            // If The status_id Is Equal To The Current Step's staus->id Then We Need To Add It To Specifications
            if ($status_id == $status->id) {
                $specifications[$specificate_key] = $value;
            }
        }
        // Replace The Old Data
        OrderStatus::where("status_id", $status->id)
            ->where("order_id", $record->id)
            ->update(
                [
                    'order_id' => $record->id,
                    'status_id' => $status->id,
                    'specifications' => $specifications,
                ]
            );
        // Send Notification To Notify The User That The Process Was Successfully Done
        NotificationHelper::sendFilamentNotification('تم تحديث البيانات');
    }

    public function getFormAction($record, $state)
    {
        $record->statuses()->delete();
        $specifications = [];
        foreach ($state as $key => $value) {
            [, $specificate_key, $status_id] = explode("_", $key);
            $specifications[$status_id][$specificate_key] = $value;
        }
        // if($specifications == []){
        //     OrderStatus::create([
        //         'order_id' => $record->id,
        //         'status_id' => $statusId,
        //         'specifications' => [],
        //     ]);
        // }
        foreach ($specifications as $statusId => $specification) {
            $status_specifications = [];

            foreach ($specification as $key => $value) {
                $status_specifications[$key] = $value;
            }
            OrderStatus::create([
                'order_id' => $record->id,
                'status_id' => $statusId,
                'specifications' => $status_specifications,
            ]);
        }
        // Update The Order's status_id
        $record->status_id = $statusId;
        $record->save();
        // Send Notification To Notify The User That The Process Was Successfully Done
        NotificationHelper::sendFilamentNotification('تم الإنتقال للخطوة التالية');
    }
}

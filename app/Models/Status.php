<?php

namespace App\Models;

use App\Enums\StatusInputsTypes;
use Filament\Forms\Components\Wizard\Step;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'specifications',
        'order_type',
    ];

    protected $casts = [
        'specifications' => 'json',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public static function getTypeSteps($type)
    {
        $statuses = Status::where("order_type", $type)->get();

        $steps = [];
        $i = 1;

        foreach ($statuses as $status) {
            $steps[] = Step::make('status_' . $status->id)
                ->label("الخطوة " . $i)
                ->schema(Status::getStepForm($status->id));
            $i++;
        }

        return  $steps;
    }

    public static function getStepForm($status_id)
    {
        $status =  Status::find($status_id);
        $inputs = [];

        foreach (array_keys($status->specifications) as $specification_key) {
            $inputs[] = StatusInputsTypes::getInput($status->specifications[$specification_key], $specification_key, $status_id);
        }
            return  $inputs;
    }
}

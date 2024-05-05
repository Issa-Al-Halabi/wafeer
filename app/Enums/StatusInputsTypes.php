<?php

namespace App\Enums;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;

class StatusInputsTypes
{
    const Date     = 1;
    const Numeric  = 2;

    public static function getName($value)
    {
        $constants = array_flip((new \ReflectionClass(self::class))->getConstants());

        return $constants[$value] ?? null;
    }
    public static function getValue($name)
    {
        return defined('self::' . $name) ? constant('self::' . $name) : null;
    }

    public static function getInput($specificate, $key, $status_id)
    {
        return match ($specificate['type']) {
            self::Date => DatePicker::make(self::getInputName($specificate['type'], $key, $status_id))
                ->required()
                ->label($specificate['label']),

            self::Numeric => TextInput::make(self::getInputName($specificate['type'], $key, $status_id))
                ->required()
                ->numeric()
                ->label($specificate['label'])
                ->maxLength(255),
        };
    }

    public static function getInputName($id, $key, $status_id)
    {
        return match ($id) {
            self::Date => 'date' . "_" . $key . "_" . $status_id,
            self::Numeric => 'numeric' . "_" . $key . "_" . $status_id
        };
    }

    public static function getValues()
    {
        return [
            self::Date,
            self::Numeric,
        ];
    }
}

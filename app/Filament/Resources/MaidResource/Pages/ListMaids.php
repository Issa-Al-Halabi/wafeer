<?php

namespace App\Filament\Resources\MaidResource\Pages;

use App\Filament\Resources\MaidResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaids extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = MaidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}

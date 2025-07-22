<?php

namespace App\Filament\Resources\IssuedBookResource\Pages;

use App\Filament\Resources\IssuedBookResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIssuedBooks extends ListRecords
{
    protected static string $resource = IssuedBookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\IssuedBookResource\Pages;

use App\Filament\Resources\IssuedBookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIssuedBook extends EditRecord
{
    protected static string $resource = IssuedBookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

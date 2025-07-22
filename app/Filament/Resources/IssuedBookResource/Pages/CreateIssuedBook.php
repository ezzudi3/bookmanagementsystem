<?php

namespace App\Filament\Resources\IssuedBookResource\Pages;

use App\Filament\Resources\IssuedBookResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIssuedBook extends CreateRecord
{
    protected static string $resource = IssuedBookResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

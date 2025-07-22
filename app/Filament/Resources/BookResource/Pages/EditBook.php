<?php

namespace App\Filament\Resources\BookResource\Pages;

use App\Filament\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditBook extends EditRecord
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->before(function () {
                    if ($this->record->issuedBooks()->exists()) {
                        Notification::make()
                            ->title('Cannot Delete Book')
                            ->body('This book is currently issued and cannot be deleted.')
                            ->danger()
                            ->send();

                        $this->halt(); // prevents deletion
                    }
                }),
        ];
    }
}

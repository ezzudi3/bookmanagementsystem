<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use App\Filament\Resources\AuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditAuthor extends EditRecord
{
    protected static string $resource = AuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->before(function () {
                    if ($this->record->books()->exists()) {
                        Notification::make()
                            ->title('Cannot Delete Author')
                            ->body('This author is assigned to one or more books.')
                            ->danger()
                            ->send();

                        $this->halt(); // prevents deletion
                    }
                }),
        ];
    }
}

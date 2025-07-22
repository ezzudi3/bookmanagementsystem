<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->before(function () {
                    // Check if category is used in books
                    if ($this->record->books()->exists()) {
                        Notification::make()
                            ->title('Cannot Delete Category')
                            ->body('This category is assigned to one or more books.')
                            ->danger()
                            ->send();

                        
                        $this->halt();
                    }
                }),
        ];
    }
}

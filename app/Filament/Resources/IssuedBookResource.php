<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IssuedBookResource\Pages;
use App\Models\IssuedBook;
use App\Models\User;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class IssuedBookResource extends Resource
{
    protected static ?string $model = IssuedBook::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Issued Books';
    protected static ?string $modelLabel = 'Issued Book';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('book_id')
                    ->label('Book')
                    ->options(
                Book::where('quantity', '>', 0)->pluck('title', 'id')->toArray()
                    )
                    ->searchable()
                    ->required(),
                

                Select::make('student_id')
                    ->label('Student')
                    ->options(
                User::pluck('name', 'id')->toArray()
                    )
                    ->searchable()
                    ->required(),

                DatePicker::make('issue_date')->required()->default(now()),
                DatePicker::make('return_date')->required(),
                DatePicker::make('returned_at')->nullable(),
                Select::make('status')->options([
                    'issued' => 'Issued',
                    'returned' => 'Returned',
                    'overdue' => 'Overdue',
                ])->default('issued'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('book.title'),
                TextColumn::make('student.name')->label('Student'),
                TextColumn::make('issue_date')->date(),
                TextColumn::make('return_date')->date(),
                TextColumn::make('returned_at')->date()->label('Returned At'),
                TextColumn::make('status')->badge(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListIssuedBooks::route('/'),
            'create' => Pages\CreateIssuedBook::route('/create'),
            'edit' => Pages\EditIssuedBook::route('/{record}/edit'),
        ];
    }
}

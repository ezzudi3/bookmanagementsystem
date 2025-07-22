<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\IssuedBook;
use Carbon\Carbon;

class DashboardStats extends StatsOverviewWidget
{
    protected ?string $heading = 'Quick Stats';

    // FORCE full-width
    protected static ?int $sort = 1;
    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
                ->description('All registered users')
                ->icon('heroicon-o-user-group')
                ->color('success'),

            Stat::make('Issued Books', IssuedBook::count())
                ->description('Total books issued')
                ->icon('heroicon-o-book-open')
                ->color('warning'),

            Stat::make('New Users Today', User::whereDate('created_at', Carbon::today())->count())
                ->description('Registered today')
                ->icon('heroicon-o-user-plus')
                ->color('primary'),
        ];
    }
}

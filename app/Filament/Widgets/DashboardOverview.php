<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardOverview extends LineChartWidget
{
    protected static ?string $heading = 'New Users per Month';
     protected static ?int $sort = 2;
    protected int|string|array $columnSpan = 1;
    

    protected function getData(): array
    {
        $users = User::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as total')
        )
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('total', 'month');

        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $data = [];

        for ($i = 1; $i <= 12; $i++) {
            $data[] = $users->get($i, 0); // default 0 if no users in that month
        }

        return [
            'datasets' => [
                [
                    'label' => 'New Users',
                    'data' => $data,
                    'borderColor' => '#4f46e5',
                    'backgroundColor' => 'rgba(79,70,229,0.2)',
                    'tension' => 0.4,
                ],
            ],
            'labels' => $labels,
        ];
    }
}

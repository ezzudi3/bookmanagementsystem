<?php

namespace App\Filament\Widgets;

use Filament\Widgets\PieChartWidget;
use App\Models\IssuedBook;
use Illuminate\Support\Facades\DB; 

class IssuedBooksChart extends PieChartWidget
{
    protected static ?string $heading = 'Issued Books by Status';
     protected static ?int $sort = 3;
    protected int|string|array $columnSpan = 1;
    

    protected function getData(): array
{
    $issuedBooks = \App\Models\IssuedBook::select('status', \DB::raw('COUNT(*) as total'))
        ->groupBy('status')
        ->pluck('total', 'status');

    return [
        'datasets' => [
            [
                'data' => $issuedBooks->values(),
                'backgroundColor' => ['#10b981', '#f97316', '#3b82f6'],
            ],
        ],
        'labels' => $issuedBooks->keys(),
    ];
}

}

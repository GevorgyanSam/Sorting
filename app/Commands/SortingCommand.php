<?php

namespace App\Commands;

use App\Services\SortingService;
use LaravelZero\Framework\Commands\Command;
use RuntimeException;

class SortingCommand extends Command
{
    protected const SORTING_ALGORITHMS = [
        'Bubble Sort',
        'Selection Sort',
        'Insertion Sort',
        'Merge Sort',
        'Quick Sort',
        'Counting Sort',
        'Radix Sort',
        'Bucket Sort',
        'Heap Sort',
        'Shell Sort',
    ];

    protected $signature = 'array:sort';

    protected $description = 'Array sorting algorithms';

    public function handle(): void
    {
        /** @var SortingService $sortingService */
        $sortingService = new SortingService();

        $arr = range(-5, 5);
        shuffle($arr);

        $method = $this->getMethod();
        $sorted = $sortingService->$method($arr);

        dd($arr, $sorted);
    }

    protected function getMethod(): string
    {
        $index = $this->menu('Choose a sorting algorithm.', self::SORTING_ALGORITHMS)
            ->disableDefaultItems()
            ->open();

        if ($index === null) {
            throw new RuntimeException('You need to choose a sorting algorithm.');
        }

        $algorithm = str_replace(' ', '', self::SORTING_ALGORITHMS[$index]);

        return lcfirst($algorithm);
    }
}

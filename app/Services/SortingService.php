<?php

namespace App\Services;

class SortingService
{
    public function bubbleSort(array $arr): array
    {
        $changeDetected = true;
        $n = count($arr) - 1;

        while ($changeDetected) {
            $changeDetected = false;

            for ($i = 0; $i < $n; $i++) {
                if ($arr[$i] > $arr[$i + 1]) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$i + 1];
                    $arr[$i + 1] = $temp;

                    $changeDetected = true;
                }
            }
        }

        return $arr;
    }

    public function selectionSort(array $arr): array
    {
        return $arr;
    }

    public function insertionSort(array $arr): array
    {
        return $arr;
    }

    public function mergeSort(array $arr): array
    {
        return $arr;
    }

    public function quickSort(array $arr): array
    {
        return $arr;
    }

    public function countingSort(array $arr): array
    {
        return $arr;
    }

    public function radixSort(array $arr): array
    {
        return $arr;
    }

    public function bucketSort(array $arr): array
    {
        return $arr;
    }

    public function heapSort(array $arr): array
    {
        return $arr;
    }

    public function shellSort(array $arr): array
    {
        return $arr;
    }
}

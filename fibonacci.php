<?php

function generateFibonacci($n) {
    $fibonacciSeries = [];
    $fibonacciSeries[0] = 0;
    $fibonacciSeries[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }

    return $fibonacciSeries;
}

$n = 10; // Change this value to generate a different number of Fibonacci numbers
$fibonacciSeries = generateFibonacci($n);

echo "Fibonacci Series up to $n terms: ";
echo implode(", ", $fibonacciSeries);


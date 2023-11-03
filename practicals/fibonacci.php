<?php
function generateFibonacci($n) {
    $fibonacciSequence = [];
    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }
    
    return $fibonacciSequence;
}

// Number of Fibonacci numbers to generate
$n = 10;

$fibonacciNumbers = generateFibonacci($n);

echo "Fibonacci sequence of $n numbers: ";
echo implode(", ", $fibonacciNumbers);
?>


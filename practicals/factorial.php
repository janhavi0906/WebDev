<?php
function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// Number for which factorial needs to be calculated
$num = 5;

$factorial = factorial($num);

echo "Factorial of $num is: $factorial";
?>


function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// Example usage
$number = 5; // Change this to the desired number
$result = factorial($number);
echo "Factorial of $number is $result";


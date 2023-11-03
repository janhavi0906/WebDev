<?php
// Number of rows in the pattern
$rows = 5;

for ($i = $rows; $i >= 1; $i--) {
    // Print stars in each row
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    // Move to the next line
    echo PHP_EOL;
}
?>


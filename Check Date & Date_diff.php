<?php
$isValid = checkdate(12, 31, 2023);

if ($isValid) {
    echo "Valid Date.\n";
} else {
    echo "Invalid Date.\n";
}


$startDate = new DateTime('2023-01-01');
$endDate = new DateTime('2023-12-31');

$interval = date_diff($startDate, $endDate);

$daysDifference = $interval->format('%a');

echo "Difference In Days: $daysDifference days\n";

?>
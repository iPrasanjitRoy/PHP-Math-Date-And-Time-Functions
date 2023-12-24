<?php
$timestamp = mktime(12, 30, 0, 1, 1, 2023);

$formattedDate = date('Y-m-d H:i:s', $timestamp);
echo "Formatted Date: $formattedDate\n";


$dateTimeObject = date_create('2023-01-01 12:30:00');

$formattedDate = date_format($dateTimeObject, 'Y-m-d H:i:s');

echo "Format Date Via DateTime: $formattedDate\n";

?>
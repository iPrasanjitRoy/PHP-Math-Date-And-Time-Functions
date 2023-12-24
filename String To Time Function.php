<?php
/*------String To Time Function------- */
$timestamp = strtotime('2023-12-24 15:30:45');

echo date("d-m-Y", strtotime("$timestamp"));

echo date("d-m-Y H:m", strtotime("Next Monday"));
echo date("d-m-Y H:m", strtotime("+1 Week")) . "<br><br>";

$timestamp2 = strtotime("Now");
echo date("d-m", strtotime("$timestamp2"));
?>
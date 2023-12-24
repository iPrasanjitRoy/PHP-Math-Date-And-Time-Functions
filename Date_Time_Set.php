<?php
/*------Date Time Set Function------- */

$dateTime = new DateTime('2023-12-24');

date_time_set($dateTime, 15, 30, 45);

echo $dateTime->format('Y-m-d H:i:s') . "\n";

?>
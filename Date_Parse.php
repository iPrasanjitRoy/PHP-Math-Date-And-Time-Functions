<?php

/*------Date Parse Function------- */
/* Date_Parse() Function Is Used To Parse A Date String Into An Associative Array */
$dateString = "2023-12-24 15:30:45";
$dateInfo = date_parse($dateString);
print_r($dateInfo);


?>
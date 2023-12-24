<?php
/* Get Date() To Obtain An Associative Array Containing Information About The Current Date And Time */
$dateInfo = getdate();
print_r($dateInfo);

/*------Get Date Function------- */
echo "<pre>";
print_r(getdate());
echo "</pre>";

/* Get Time Of Day() Is Used To Get An Associative Array Containing Information About The Current Time /*
/*------Get Time OF Day Function------- */
$timeInfo = gettimeofday();
print_r($timeInfo);

/* Local Time() Function Is Employed To Obtain An Indexed Array With Information About The Local Time */
/*------Local Time Function------- */
$localTimeInfo = localtime();
print_r($localTimeInfo);
?>
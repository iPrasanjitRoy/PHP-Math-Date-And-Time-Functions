<?php
/*------Time Zone Function------- */
echo date_default_timezone_get();
date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get();

/*------Time Zone Open Function------- */
$tz = timezone_open("Asia/Kolkata");
echo timezone_name_get($tz);

/*------Time Zone Identifiers List Function------- */
$timezones = timezone_identifiers_list();
foreach ($timezones as $timezone) {
    echo $timezone . "\n";
}
?>
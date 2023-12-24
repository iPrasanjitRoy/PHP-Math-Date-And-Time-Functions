<?php
/*------Date Add Function------- */
$date = date_create("2015-05-15");
date_add($date, date_interval_create_from_date_string("30 Days"));

echo date_format($date, "d-m-Y") . "<br><br>";

/*------Date Subtract Function------- */
date_sub($date, date_interval_create_from_date_string("10 Days"));

echo date_format($date, "d-m-Y") . "<br><br>";

/*------Date Modify Function------- */
date_modify($date, "10 Days");
echo date_format($date, "d-m-Y") . "<br><br>";

date_modify($date, "-10 Days");
echo date_format($date, "d-m-Y") . "<br><br>";

?>
<?php
$randomNumber = rand();
echo "Random Number: $randomNumber\n";


$randomInRange = rand(1, 100);
echo "Random Number In Range: $randomInRange\n";


$randomNumber = mt_rand();
echo "Random Number: $randomNumber\n";

$randomInRange = mt_rand(1, 100);
echo "Random Number In Range: $randomInRange\n";

$randomFloat = lcg_value();
echo "Random Float: $randomFloat\n";


?>

<?php
include "rand.php";
$age = 21;
$val_for_round = 5.6678;
$progr_age = 5;
$ceil = ceil($val_for_round);
$round = round($val_for_round,3);
$floor = floor($val_for_round);
$file_name = "first PHP file";

echo "<h2><br>В большую сторону - $ceil, в большую но с настройками - $round, в меньшую - $floor </h2>";









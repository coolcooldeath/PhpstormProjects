<?php
setcookie('test', plus());
echo " Счетчик посещений {$_COOKIE['test']}";
$filepath = 'ips.txt';
$file = file($filepath);
function plus()
{
    if (isset($_COOKIE['test'])) {
        $_COOKIE['test']++;
    } else {
        $_COOKIE['test'] = 1;
    }
    return $_COOKIE['test'];
}

/*$numberVisitsFinal = [$_SERVER['REMOTE_ADDR'] => plus() ];*/

$json = file_get_contents($filepath);
$array = json_decode($json, true);
$array[$_SERVER['REMOTE_ADDR']] = plus();
$json = json_encode($array, JSON_UNESCAPED_UNICODE);
file_put_contents($filepath, $json);


echo '<pre>';
print_r($json);
echo '</pre>';

<?php
$bool = true;
$str = "";
if (isset($str)) {
    echo "Переменная $str существует" . "<br>";
}
if (empty($str)) {
    echo "Переменная $str пустая" . "<br>";
}
$flo = 121.35;
if (!is_bool($flo)) {
    echo "Переменная $flo не bool" . "<br>";
}
if (!is_int($flo)) {
    echo "Переменная $flo не int" . "<br>";
}
if (is_float($flo)) {
    echo "Переменная $flo  float" . "<br>";
}




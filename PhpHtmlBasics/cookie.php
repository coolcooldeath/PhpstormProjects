<?php

setcookie('test', plus());
echo " Счетчик посещений {$_COOKIE['test']}";

function plus(){
    if (isset($_COOKIE['test'])) {
        $_COOKIE['test']++;
    }else{
        $_COOKIE['test'] = 1;
    }
    return $_COOKIE['test'];
}

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';
?>



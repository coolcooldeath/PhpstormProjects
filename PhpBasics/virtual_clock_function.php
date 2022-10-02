<?php

function helloUser($user_name){
    $n = (new \DateTime())->format('H');
    switch ($n){
        case ($n>=22||$n<=6):
            echo "Доброй ночи," . $user_name;
            break;
        case ($n>=22||$n<=6):
            echo "Доброй ночи," ." ". $user_name;
            break;
        case ($n>=7||$n<=16):
            echo "Добрый день," . " " . $user_name;
            break;

        case ($n>=17||$n<=21):
            echo "Добрый вечер," . " " .$user_name;
            break;
    }
}
helloUser("Костя");

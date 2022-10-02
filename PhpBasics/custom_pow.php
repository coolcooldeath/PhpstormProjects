<?php

function myPow(int $arg1, int $arg2)
{
    echo "POW ";
    $pow_result =1;
    for ($i = 1; $i <= $arg2; $i++) {
        $pow_result*=$arg1;
    }
    echo $pow_result . "<br>";
    return $pow_result;

}
my_pow(3,3);

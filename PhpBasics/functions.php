<?php
$people = [
    'Ivan' => ['age' => 21, 'weight' => 63],
    'Oleg' => ['age' => 25, 'weight' => 70],
    'Nika' => ['age' => 19, 'weight' => 53],
    'Kostya' => ['age' => 90, 'weight' => 99],
    'Vasya' => ['age' => 49, 'weight' => 89],
    'Nikita' => ['age' => 119, 'weight' => 100],
    'Andrei' => ['age' => 9, 'weight' => 100],
    'Cesar' => ['age' => 23, 'weight' => 69],

];

$arr = ["Cat","Dog","Duck"];

function printList(...$list){

    foreach ($list as $value)
        echo  "$value <br>";
}


/*printList("Cat","Dog","Duck");*/
/*printList(...$arr);*/

// обход многомерного массива при помощи рекурсии

function printMultidimensionArray($array){
     foreach ($array as $key => $value){
         if(!is_array($value))
             echo "<h3>$key - $value </h3>";
         if(is_array($value)){
             echo "<h1>$key</h1>";
             printMultidimensionArray($value);}

     }

}
function factorial($num){
    if ($num <= 1) return 1;

    return $num * factorial($num - 1);
}
/*echo factorial(3);
printMultidimensionArray($people);*/

//замыкание
$str = "одна концовка";

 $printSome =  function  ($some_txt) use ($str){
    echo $some_txt . " " . $str;
};

$str = "  ";
$printSome("У этого предложения всегда");
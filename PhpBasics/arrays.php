<?php

$str = "cat";
$arr = (array)$str;// 3 способ
$arr = array('cat','dog','duck');// 2 способ
$arr = ['cat','dog','duck',"key"=>"tiger"];// 1 способ
$task_array = [];
$people = [
    'Ivan' => ['age' => 21, 'weight' => 63],
    'Oleg' => ['age' => 25, 'weight' => 70],
    'Nika' => ['age' => 19, 'weight' => 53]
];

/*echo $people['Oleg']['weight'] . "<br>";

echo "Олег весит {$people['Oleg']['weight']} кг. <br>";

foreach ($people as $key => $val){
    foreach($val as $inner_key =>$inner_val)
        echo $key . " " . $inner_key . " " . $inner_val . "<br>";
}
$merge_array = array_merge($people,$arr);

echo "<pre>";
print_r($merge_array);
echo "</pre>";
if($people == $arr)
    echo "равны";
if(is_array($str))
    echo "массив";
if(in_array($str,$arr))
    echo $str . " есть в массиве";
else
    echo $str . " нет в массиве";*/

for($i=0;$i<=rand(5,10);$i++){
    $task_array[$i] = rand(0,100);
}
sort($task_array);
echo "<pre>";
print_r($task_array);
echo "</pre>";
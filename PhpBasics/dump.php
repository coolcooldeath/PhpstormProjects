<?php
$a = array(1, 2, array("a", "b", "c"));
$b = "123";
$c = 123;
$d = 124;
$e = 125;
/*var_dump($a);*/
/*var_dump($b===$c);*/

switch ($e){
    case '123':
        echo "123 <br> ";
        break;
    case 124:
        echo 124 . "<br>" ;
        break;
    default:
        echo "default <br>";

}

// while ($i <= 200) {
// 	echo "$i <br>";
// 	$i++;
// }

// while (true) {
// 	$i++;
//
// 	if ($i > 20) break;
// 	echo "$i <br>";
// }

// while (--$i) {
// 	echo "$i <br>";
// }





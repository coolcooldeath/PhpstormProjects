<?php
session_start();
$period = " ";
switch (($_POST["period"])){
    case(">2"):
        $period = "больше 2 лет";
        break;
    case(">5"):
        $period = "больше 5 лет";
        break;
    case(">1"):
        $period = "больше 1 года";
        break;
    case("<1"):
        $period = "меньше 1 года";
        break;

}
$sex = " ";
switch (htmlspecialchars($_POST["sex"])){
    case("men"):
        $sex = "муж.";
        break;
    case("women"):
        $sex = "жен.";
        break;

}
echo" <h1> " . htmlspecialchars($_POST["surname"]) . " " .  htmlspecialchars($_POST["name"]) .  " "  . $sex ."</h1>";
echo  " <h2>Изучает " . htmlspecialchars($_POST["lang"]) . " $period </h2>";
echo"  Приложил комментарий:";
echo" <br>" . htmlspecialchars($_POST["comment"]) ;


$_SESSION["user_name"] = htmlspecialchars($_POST["name"]);
$_SESSION["user_surname"] = htmlspecialchars($_POST["surname"]);
echo '<pre>';
print_r($_SESSION);
echo '</pre>';


?>

<p><a href="http://localhost:4000/session_test_page.php">Следующая страница</a></p>

<?php
session_start();
$_SESSION['name'] = 'Kostya';
$_SESSION['arr'] = [1, '2', 'test'];


if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
echo "Сессии";

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
// session.save_path

// unset($_SESSION['name']);
$_SESSION = [];

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
var_dump(session_destroy());




?>
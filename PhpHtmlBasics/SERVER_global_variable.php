<?php
/*// Дерево документа
echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
// Некие параметры относительно типов документа
echo $_SERVER['HTTP_ACCEPT'] . '<br>';
// Предпочтения клиента касательно языка
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '<br>';
// Получение хоста
echo $_SERVER['HTTP_HOST'] . '<br>';
// Адрес с которого пришел к нам посетитель
echo $_SERVER['HTTP_REFERER'] . '<br>';
// тип браузера и ОС
echo $_SERVER['HTTP_USER_AGENT'] . '<br>';
// IP адрес клиента
echo $_SERVER['REMOTE_ADDR'] . '<br>';
// Абсолютный путь исполняемого файла
echo $_SERVER['SCRIPT_FILENAME'] . '<br>';
// хранится имя сервера / домен
echo $_SERVER['SERVER_NAME'] . '<br>';
// Считываем метод запроса
echo $_SERVER['REQUEST_METHOD'] . '<br>';
// Параметры с запроса страницы
echo $_SERVER['QUERY_STRING'] . '<br>';
// Содержит имя скрипта включая параметры
echo $_SERVER['REQUEST_URI'] . '<hr>';*/

echo '<pre>';
print_r($_SERVER);
echo '<pre>';
?>
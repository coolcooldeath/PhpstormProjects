<?php
if(move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name'])){
    if ($_FILES['file']['size'] > 1*1024*1024) {
        echo 'Размер файла превышает 2 мегабайта';
        exit();
        echo 'test';
    }else{
        echo 'Файл скопирован на сервер<br>';
        echo 'Имя файла: ';
        echo $_FILES['file']['name'] . '<br>';
        echo 'Размер файла: ';
        echo $_FILES['file']['size'] . '<br>';
        echo 'Тип файла: ';
        echo $_FILES['file']['type'] . '<br>';
        $file_text =  file_get_contents($_FILES['file']['name']);
        $file_text_array  = explode("\n",$file_text);
        echo "<pre>";
        print_r($file_text_array);
        echo "</pre>";
    }
}


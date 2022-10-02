<?php

class FindFunction{

    static function find($func_name) {
        $page = file_get_contents('https://www.php.net/manual/en/function.' . $func_name );
        $dom = new DOMDocument;
        $dom->loadHTML($page);
        $desc = $dom->getElementsByClassName('refsect1 description');
        print_r($desc);
        return $desc;
    }
}

FindFunction::find("time");
<?php
class Article extends Table{

    private $tm;
    function __construct() {
        $this->tm = new TableManager();

        var_dump($tm);
    }



}
?>
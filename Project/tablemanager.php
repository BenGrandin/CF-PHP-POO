<?php

class TableManager {

    protected $_table;
    private $_pdo = false;

    function __construct($table) {
        echo $this->_pdo;
        if($this->_pdo == true) {
            echo "je suis appelé automatiquement et je m'appelle " . $table;
            $this->_pdo = true;
        }
    }

    public static function create() {
        new self("article");
        echo "je suis créer<br />";
    }

}

class Article {
    function __construct() {

        TableManager::create("article");
        TableManager::create("article");
        TableManager::create("article");
        TableManager::create("article");
        TableManager::create("article");
    }
}

$article = new Article();

?>
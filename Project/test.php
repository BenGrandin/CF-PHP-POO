<?php

class Article {

    private $_db = null;

    public function __construct()
    {
        $this->setDb();
    }


    public function setDb()
    {
        if($this->_db == null) {
            try {

                $host = "localhost";
                $dbname = "cf_poo_php";
                $user = "root";
                $password = "";
         
                $db = new PDO
                (
                    "mysql:host=$host;dbname=$dbname",
                    $user,
                    $password,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
         
                    $this->_db = $db;
                }
         
            catch(Exception $e) {
                die('Ereur : ' . $e->getMessage());
         
            }    
        }

        return $this->_db;
      
    }

    public function query($statement, $arg = []) {
        try {
            $req = $this->_db->prepare($statement);
            $req->execute($arg);
        }catch(Exception $e) {
            return $e;
        }

        return $req;
    }

    public function get(int $id)
    {
        
        $req = $this->query("SELECT * FROM ".get_class($this)." WHERE id = :id",
         ["id" => $id]);
        $req->setFetchMode(PDO::FETCH_OBJ);

        return $req->fetch();
    }

    public function getList()
    {
        var_dump(strtolower(get_class($this)));
        $req = $this->query("SELECT * FROM ".strtolower(get_class($this))."");
       $req->setFetchMode(PDO::FETCH_OBJ);

       return $req->fetchAll();
    }
}

$test = new Article();

var_dump("<pre><code>");
var_dump($test->getList());

?>
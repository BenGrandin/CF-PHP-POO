<?php

class Media extends Table
{
    protected $name;
    protected $type;
    

    public function __construct($name, $type, $id)
    {
        $this->setId($id);
        $this->setname($name);
        $this->settype($type);
    }


    public function setTitle(string $tilte)
    {
        $this->name = $name;
    }
    public function getname()
    {
        return $this->name;
    }

    public function settype(string $type)
    {
        $this->type = $type;
    }
    public function gettype()
    {
        return $this->type;
    }

    public function setDb($db)
    {
        try {

            $host = "localhost";
            $dbname = "PHP";
            $user = "root";
            $password = "root";
     
            $db = new PDO
            (
                "mysql:host=$host;dbname=$dbname",
                $user,
                $password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     
            return $db;
            }
     
        catch(Exception $e) {
            die('Ereur : ' . $e->getMessage());
     
        }        
     
     }

    // CRUD 

    public function create()
    {

    }
    public function read()
    {
        
    }
    public function update()
    {

    }
    public function delete()
    {

    }
}
?>
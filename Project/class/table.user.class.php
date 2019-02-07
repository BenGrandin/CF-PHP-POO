<?php

class User extends Table
{
    protected $name;
    protected $password;
    

    public function __construct($name, $password, $id)
    {
        $this->setId($id);
        $this->setname($name);
        $this->setpassword($password);
    }

    public function setTitle(string $tilte)
    {
        $this->name = $name;
    }
    public function getname()
    {
        return $this->name;
    }

    public function setpassword(string $password)
    {
        $this->password = $password;
    }
    public function getpassword()
    {
        return $this->password;
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

$web = new Article("google", "google", 3)
?>
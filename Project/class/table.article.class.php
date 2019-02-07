<?php

class Article extends Table
{
    protected $title;
    protected $content;

    
    public function __construct($title, $content, $id)
    {
        $this->setId($id);
        $this->setTitle($tilte);
        $this->setContent($content);
    }



    public function setTitle(string $tilte)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setContent()
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
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
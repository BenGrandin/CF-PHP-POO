<?php
class TableManager{
    

    private $_db = null; // Instance de PDO.
    // private $_tableStructure = [
    //     "user" => ['id', 'name', 'password'],
    //     "article" => ['id', 'title', 'content'],
    //     "media" => ['id', 'name', 'type']
    // ]; // $_tableStructure['article'][0] ==> id

    private $_table;

    function __construct($table)
    {
       $this->setDb();
       $this->_table = $table;
    }
    // public function getTableStructure(string $name, string $key)
    // {
    //     if($this->_tableStructure[$name][$key]) {
    //         return "get".uc_first($this->_tableStructure[$name][$key])."()";
    //     }

    //     return false;
    // }

    public function create($objetX)
    {
        $db = $this->_db;

        if(strtolower(get_class($objetX)) == "user")
        {
            $req=  $db->prepare('INSERT INTO user(name,password) VALUES (:name, :password');

            $req->bindValue(':name', htmlspecialchars($objetX->getName()), PDO::PARAM_STR);
            $req->bindValue(':password', password_hash($objetX->getPassword(), PASSWORD_DEFAULT), PDO::PARAM_STR);

            $req->execute();
        }
        else if(strtolower(get_class($objetX)) == "article")
        {
            $req = $db->prepare("INSERT INTO article(title, content) VALUES(:title, :content)");

            $req->bindValue(':title', $objetX->getTitle(), PDO::PARAM_STR);
            $req->bindValue(':content', $objetX->getContent(), PDO::PARAM_STR);

            $req->execute();
        }
        else if(strtolower(get_class($objetX)) == "media")
        {
            $req = $db->prepare("INSERT INTO media(name, type) VALUES(:name, :type)");

            $req->bindValue(':name', $objetX->getName(), PDO::PARAM_STR);
            $req->bindValue(':type', $objetX->getType(), PDO::PARAM_STR);

            $req->execute();
        }

        // $column = implode(',' $this->_tableStructure[get_class(strtolower($this))]); // id,name,password
        
        // $rank1 = $this->getTableStructure(get_class(strtolower($this)), 1) //
        // $rank2 = $this->getTableStructure(get_class(strtolower($this)), 2)
        // $rank3 = $this->getTableStructure(get_class(strtolower($this)), 3)

        // $db = $this->_db;
        // $db->prepare('INSERT title, content INTO article VALUES (title = :title, content = :content');



        // $tmpUser = "get".uc_first($_tableStructure['user'][0])."()"; // getId()


        
        // $db->bindValue(':title', htmlspecialchars($article1->$tmp), PDO::PARAM_STR);
        // $db->bindValue(':content', htmlspecialchars($article1->getContent()), PDO::PARAM_STR);

        // $db->execute();
        //$request = "INSERT INTO " . $obj->getTableName() . " "

    }
    
    public function query($statement, $arg = []) {

        try {
            $req = $this->_db->prepare($statement);
            $req->execute($arg);
        }
        catch(Exception $e) {
            return $e;
        }
        return $req;
    }

    public function get(int $id)
    {
        echo "SELECT * FROM ".$this->_table." WHERE id = $id";
        $req = $this->_db->prepare("SELECT * FROM ".$this->_table." WHERE id = :id");
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();

        return $req->fetch();
    }

    public function getList()
    {
        $req = $this->query("SELECT * FROM ".$this->_table . " ORDER BY id ASC");
        $req->setFetchMode(PDO::FETCH_ASSOC);

       return $req->fetchAll();
    }

    public function update($objetX)
    {
        if(strtolower(get_class($objetX)) == "user")
        {
            $db = $this->_db;
            $db->prepare('UPDATE user SET name = :name, password = :password WHERE id = :id');

            $db->bindValue(':name', htmlspecialchars($objetX->getName()), PDO::PARAM_STR);
            $db->bindValue(':password', password_hash($objetX->getPassword(), PASSWORD_DEFAULT), PDO::PARAM_STR);
            $db->bindValue(':id', $objetX->getId(), PDO::PARAM_INT);

            $db->execute();
        }
        else if(strtolower(get_class($objetX)) == "article")
        {
            $db = $this->_db;
            $db->prepare('UPDATE article SET title = :title, content = :content WHERE id = :id');

            $db->bindValue(':title', htmlspecialchars($objetX->getTitle()), PDO::PARAM_STR);
            $db->bindValue(':content', $objetX->getContent(), PDO::PARAM_STR);
            $db->bindValue(':id', $objetX->getId(), PDO::PARAM_INT);

            $db->execute();
        }
        else if(strtolower(get_class($objetX)) == "media")
        {
            $db = $this->_db;
            $db->prepare('UPDATE media SET name = :name, type = :type WHERE id = :id');

            $db->bindValue(':name', htmlspecialchars($objetX->getName()), PDO::PARAM_STR);
            $db->bindValue(':type', htmlspecialchars($objetX->getType()), PDO::PARAM_STR);
            $db->bindValue(':id', $objetX->getId(), PDO::PARAM_INT);

            $db->execute();
        }
    }

    static public function delete($objetX)
    {
        if(strtolower(get_class($objetX)) == "user")
        {
            $db = $this->_db;
            $db->prepare('DELETE FROM user WHERE id= :id');

            $db->bindValue(':id', $objetX->getId(), PDO::PARAM_STR);

            $db->execute();
        }
        else if(strtolower(get_class($objetX)) == "article")
        {
            $db = $this->_db;
            $db->prepare('DELETE FROM article WHERE id= :id');

            $db->bindValue(':id', $objetX->getId(), PDO::PARAM_STR);

            $db->execute();
        }
        else if(strtolower(get_class($objetX)) == "media")
        {
            $db = $this->_db;
            $db->prepare('DELETE FROM media WHERE id= :id');

            $db->bindValue(':id', $objetX->getId(), PDO::PARAM_STR);

            $db->execute();
        }
    }

    public function setDb()
    {
        if($this->_db == null) {
            try {
                require dirname(__DIR__).'/config.php';
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

}
?>
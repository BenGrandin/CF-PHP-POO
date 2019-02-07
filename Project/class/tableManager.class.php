<?php
class TableManager{

    private $_db = null; // Instance de PDO.
    // private $_tableStructure = [
    //     "user" => ['id', 'name', 'password'],
    //     "article" => ['id', 'title', 'content'],
    //     "media" => ['id', 'name', 'type']
    // ]; // $_tableStructure['article'][0] ==> id

    function __construct()
    {
       $this->setDb();
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
            $db->prepare('INSERT name, password INTO user VALUES (name = :name, password = :password');

            $db->bindValue(':name', htmlspecialchars($objetX->getName()), PDO::PARAM_STR);
            $db->bindValue(':password', password_hash($objetX->getPassword(), PASSWORD_DEFAULT), PDO::PARAM_STR);

            $db->execute();
        }
        else if(strtolower(get_class($objetX)) == "article")
        {
            $db->prepare('INSERT title, content INTO article VALUES (title = :title, content = :content');

            $db->bindValue(':title', htmlspecialchars($objetX->getTitle()), PDO::PARAM_STR);
            $db->bindValue(':content', $objetX->getContent(), PDO::PARAM_STR);

            $db->execute();
        }
        else if(strtolower(get_class($objetX)) == "media")
        {
            $db->prepare('INSERT name, type INTO media VALUES (name = :name, type = :type');

            $db->bindValue(':name', htmlspecialchars($objetX->getName()), PDO::PARAM_STR);
            $db->bindValue(':type', $objetX->getType(), PDO::PARAM_STR);

            $db->execute();
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
        
        $req = $this->query("SELECT * FROM ".strtolower(get_class($this))." WHERE id = :id",
         ["id" => $id]);
        $req->setFetchMode(PDO::FETCH_OBJ);

        return $req->fetch();
    }

    public function getList()
    {
        $req = $this->query("SELECT * FROM". strtolower(get_class($this)));
       $req->setFetchMode(PDO::FETCH_OBJ);

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

    public function delete()
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

                $host = "localhost";
                $dbname = "cf_poo_php";
                $user = "root";
                $password = "root";
         
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
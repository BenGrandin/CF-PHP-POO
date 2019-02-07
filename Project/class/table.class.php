<?php
abstract class Table{

    protected $id;
    protected $tm;
    protected $table;

    function __construct(array $data) {
        // Hydratation du tableau $data
        $this->hydrate($data); // hydratation du tableau $data.
        // Instanciation d'un nouveau table manager.
        $this->tm = new TableManager($this->table);
    }
    
    protected function hydrate(array $data)
    {
        foreach($data as $key => $values)
        {
            // Récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
            // Vérifie si le setter correspondant existe.
            if(method_exists($this, $method))
            {
                // Appel le setter.
                $this->$method($values);
            }
        }
        
    }
    public function fetch() {
        return $this->tm->get($this->getId());
    }
    public function fetchAll() {
        return $this->tm->getList();
    }
    public function setId(int $id) { $this->id = $id;}
    public function getId(){ return $this->id; }
}
?>
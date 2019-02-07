<?php
abstract class Table{

    protected $id;
    protected $tm;
    protected $table;

    function __construct(array $data) {
        $this->hydrate($data);

        $this->tm = new TableManager($this->table);
    }

    protected function hydrate(array $data)
    {
        $this->hydrate($data);
        $tm = new TableManager();
    }
    
    public function hydrate(array $data)
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
}
?>
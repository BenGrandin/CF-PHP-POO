<?php
abstract class Table{

    protected $id;

    public function hydrateSetter(array $data)
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
    public function hydrateGetter(array $data)
    {
        foreach($data as $key => $values)
        {
            // Récupère le nom du getter correspondant à l'attribut.
            $method = 'get'.ucfirst($key);
            // Vérifie si le getter correspondant existe.
            if(method_exists($this, $method))
            {
                // Retourne le getter.
                return $this->$values;
            }
        }
        
    }
}
?>
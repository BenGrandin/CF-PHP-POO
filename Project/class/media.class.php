<?php
class Media extends Table{

    protected $name;
    protected $type;
    protected $table = "media";

    public function setName(string $name) { $this->name = $name; }
    public function setType(string $type) { $this->type = $type; }

    public function getName() : string { return $this->name; } // ": string" impose le type de retour
    public function getType() : string { return $this->type; }
}
?>
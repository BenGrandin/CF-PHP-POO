<?php
class Media extends Table{

    protected $name;
    protected $type;
    protected $table = "media";

    protected function setName(string $name) { $this->name = $name; }
    protected function setType(string $type) { $this->type = $type; }

    protected function getName() : string { return $this->name; } // ": string" impose le type de retour
    protected function getType() : string { return $this->type; }

    public function fetch() { return $this->tm->get($this->getId()); }
    public function fetchAll() { return $this->tm->getList(); }
}
?>
<?php
class User extends Table{

    protected $name;
    protected $password;

    public function setName(string $name) { $this->name = $name; }
    public function setPassword(string $password) { $this->password = $password; }

    public function getName() : string { return $this->name; }
    public function getPassword() : string { return $this->password; }

}
?>
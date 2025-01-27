<?php

include("./Crud.php");

class Contact extends Crud {
    private $name;
    private $id;

    private $prenom;
    private $phone;
    private $email;

    public function __construct($id,$name, $prenom, $phone, $email) {
        $this->id = $id;

        $this->name = $name;
        $this->prenom = $prenom;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getPhone() {
        return $this->phone;
    }
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id =$id;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
}
?>

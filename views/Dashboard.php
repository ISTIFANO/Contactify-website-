<?php 
class Contact {

    private $name;
    private $prenom;
    private $phone;
    private $email;

    public function __construct($name, $prenom, $phone, $email) {
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

    public function getEmail() {
        return $this->email;
    }
}

$newobj = new Contact("dsnjis", "jdhsu", 5356364, "jjsjnnd");


echo "Name: " . $newobj->getName() . "\n";
echo "Prenom: " . $newobj->getPrenom() . "\n";
echo "Phone: " . $newobj->getPhone() . "\n";
echo "Email: " . $newobj->getEmail() . "\n";
?>

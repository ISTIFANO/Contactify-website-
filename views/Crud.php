<?php

class Crud {
    public $connection;
    
    public function __construct() {
        $this->connection = (new DatabaseConfiguration())::connect();
    }
    
    public function AjouterContact($nom, $prenom, $telephone, $email) {

        $query = $this->connection->prepare("INSERT INTO contacts (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)");
        $query->bind_param("ssss", $nom, $prenom, $email, $telephone);
        
        return $query->execute();
    }
    
    public function ModifierContact($name, $lname, $email, $contactnb, $userid) {

    $query = $this->connection->prepare("UPDATE contacts SET nom=?, prenom=?, email=?, telephone=? WHERE id=?");
        $query->bind_param("ssssi", $name, $lname, $email, $contactnb, $userid);
        return $query->execute();
    }
    

    public function SupprimerContact($rid) {
        $query = $this->connection->prepare("DELETE FROM contacts WHERE id=?");
      $query->bind_param("i", $rid);
        return $query->execute();
    }
    
    public function ListerContact() {
        $query = "SELECT * FROM contacts";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>
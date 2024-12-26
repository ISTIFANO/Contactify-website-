<?php
include("./connexion.php");

class Crud {
    public $connection;

    public function __construct() {
        $this->connection= (new DatabaseConfiguration())::connect();
    }

    public function AjouterContact($nom, $prenom, $telephone,$email) {
        $query = "insert into Contacts VALUES('$nom','$prenom','$email',$telephone)";
        $result = $this->connection->query($query);
        return $result;
    }

    public function ModifierContact($name, $lname, $email, $contactnb, $userid) {
        $query = ("update Contacts set nom='$name',prenom='$lname',email='$email',telephone='$contactnb' where id='$userid' ");
        $result = $this->connection->query($query);
        return $result;
    }

    public function SupprimerContact($rid) {
        $query = "delete from tblusers where id=$rid";
        $result = $this->connection->query($query);
        return $result;
    }

    public function ListerContact() {
        $query = "select *from contact";
        $result = $this->connection->query($query);
        return $result;
    }
}
?>

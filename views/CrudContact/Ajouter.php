<?php
include("./views/Contact.php");
include("./views/Crud.php");


$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// echo$email;
// echo$lastname;
// echo$phone;
// echo$name;
if (isset($_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['phone'])) {

$contact = new Contact($name, $lastname, $phone, $email);

$crud = new Crud();  
$resultat = $crud->AjouterContact($contact->getName(), $contact->getPrenom(), $contact->getEmail(), $contact->getPhone());

if ($resultat) {
    echo "Contact added successfully!";
} else {
    echo "Error adding contact.";
}

}else{
    echo"error";
}
?>

<?php 
//   $root = $_SERVER['DOCUMENT_ROOT'];
// //   echo  $root;

//   $envFilepath = "$root/Contactify-website/.env";

// //   echo  $envFilepath;

//    $env = parse_ini_file($envFilepath);
// //  print_r($env); 
//    $db = $env["DATABASE"];
//    $hostname = $env["HOSTNAME"];
//    $password = $env["PASSWORD"];
//    $user = $env["USER"];

//    $info = "mysql:host=$hostname;dbname=$db;charset=UTF8";
   
//    try {
//        $pdo = new PDO($info, $user, $password);
   
//        if ($pdo) {
//            echo "<h1>Connected to the  $db  database successfully!</h1>";
//        }
//    } catch (PDOException $e) {
//        echo $e->getMessage();
//    }

class DatabaseConfiguration{

    private $hostname="localhost";
    private $database="Contactify";
    private $user="root";
    private $password="";

    protected $connexion;

    public function __construct()
    {

        if (!isset($this->connexion)) {
            $info = "mysql:host=$this->hostname;dbname=$this->database;charset=UTF8";
   
            try {
                $pdo = new PDO($info, $this->user, $this->password);
            
             if ($pdo) {
                    echo "<h1>Connected to the  $this->database  database successfully!</h1>";
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

return $this->connexion;
    }



}
$test = new DatabaseConfiguration();

// echo$test;
?>
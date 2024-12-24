<?php 
  $root = $_SERVER['DOCUMENT_ROOT'];
  $envFilepath = "$root/Contactify-website/.env";

//   echo  $envFilepath;

   $env = parse_ini_file($envFilepath);
// print_r($env); 
   $db = $env["DATABASE"];
   $hostname = $env["HOSTNAME"];
   $password = $env["PASSWORD"];
   $user = $env["USER"];

   $dsn = "mysql:host=$hostname;dbname=$db;charset=UTF8";
   
   try {
       $pdo = new PDO($dsn, $user, $password);
   
       if ($pdo) {
           echo "Connected to the $db database successfully!";
       }
   } catch (PDOException $e) {
       echo $e->getMessage();
   }

?>
<?php

require_once '../vendor/autoload.php'; 

use Dotenv\Dotenv;

class DatabaseConfiguration
{

    protected $connexion;
    private $hostname;
    private $database;
    private $user;
    private $password;

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();
     $this->hostname = $_ENV['HOSTNAME'];
        $this->database = $_ENV['DATABASE'];
        $this->user = $_ENV['USER'];
        $this->password = $_ENV['PASSWORD'];
    }
    public function connect()
    {
        if (!isset($this->connexion)) {
            $info = "mysql:host=$this->hostname;dbname=$this->database;charset=UTF8";

            try {
                $this->connexion = new PDO($info, $this->user, $this->password);
                if ($this->connexion) {
                    echo "<h1>Connected to the $this->database database successfully!</h1>";
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $this->connexion;
    }
}
$test = new DatabaseConfiguration();
$test->connect();

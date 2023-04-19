<?php 
namespace models;

require_once(dirname(__DIR__)."/core/dbconnectionmanager.php");

require(dirname(__DIR__)."/core/membershipprovider.php");

class User{
    private $id;
    private $email;
    private $password;


    private $dbConnection;
    private $membershipProvider;

    function __construct(){
        $conManager = new \database\DBConnectionManager();

        $this->dbConnection = $conManager->getConnection();

        $this->membershipProvider = new \membershipprovider\MembershipProvider($this);
    }

    function login(){

    }

    function register(){
        $query = "INSERT INTO user (email, password, enabled2fa) VALUES(:username, :password, :enabled2fa)";
    }

    function getUserByEmail($email){

        $query = "SELECT * FROM user WHERE email = :email";

        $statement = $this->dbConnection->prepare($query);
        
        $statement->execute(['email'=> $email]);

        return $statement->fetchAll(\PDO::FETCH_CLASS, User::class);
    }

    public function setEmail($email){

        $this->email = $email;

    }
   
    public function getEmail(){

        return $this->email;

    }

    public function getPassword(){

        return $this->password;

    }

    public function setPassword($password){

        $this->password = $password;

    }

}

?>
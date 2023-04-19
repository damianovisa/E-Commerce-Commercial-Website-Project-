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

}

?>
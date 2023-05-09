<?php 
namespace models;

require_once(dirname(__DIR__)."/core/dbconnectionmanager.php");

require(dirname(__DIR__)."/core/membershipprovider.php");

class Cart{

    private $cart_id;

    function __construct(){
        $conManager = new \database\DBConnectionManager();

        $this->dbConnection = $conManager->getConnection();

        $this->membershipProvider = new \membershipprovider\MembershipProvider($this);
    }

    public function getAll($cart_id){
        $SQL = "SELECT * FROM cart WHERE cart_id=:cart_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['cart_id'=>$cart_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
        return $STMT->fetchAll();
    }

    public function setId($cart_id){

        $this->id = $id;

    }
   
    public function getId(){

        return $this->id;

    }

}
    
    
?>
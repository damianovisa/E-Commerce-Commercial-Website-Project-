<?php 
namespace controllers;

require(dirname(__DIR__)."/models/seller.php");

class SellerController{

    function __construct(){

        if(isset($_GET)){
            if(isset($_GET['action'])){

                $action = $_GET['action'];

                $viewClass = "\\views\\"."Seller".ucfirst($action);

                $this->seller = new \models\Seller();

                $products = $this->seller->getAll();

                // if($action == 'login'){
                //     if(isset($_POST['email']) && isset($_POST['password']) ){

                //         $this->user->setEmail($_POST['email']);
                //         $this->user->setPassword($_POST['password']);
                //         $this->user = $this->user->getUserByEmail($_POST['email'])[0];

                //         $this->user->$action();
                //     }
                // }else if($action == 'register'){
                //     if(isset($_POST['email']) && isset($_POST['password']) ){

                //         $this->user->setEmail($_POST['email']);
                //         $this->user->setPassword($_POST['password']);
                //         $this->user->setFname($_POST['fname']);
                //         $this->user->setLname($_POST['lname']);

                //         $this->user->$action();
                //     }
                // }else if($action == 'logout'){
                //     $this->user->$action();
                // }

                if(class_exists($viewClass)){

                    $view = new $viewClass($this->seller);

                    $view->render($products);

                }

            }
    }
    }
}

?>
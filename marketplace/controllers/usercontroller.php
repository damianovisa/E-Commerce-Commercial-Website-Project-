<?php 
namespace controllers;

require(dirname(__DIR__)."/models/user.php");

class UserController{

    function __construct(){

        if(isset($_GET)){
            if(isset($_GET['action'])){

                $action = $_GET['action'];

                $viewClass = "\\views\\"."User".ucfirst($action);

                $this->user = new \models\User();

                if($action == 'login'){
                    if(isset($_POST['email']) && isset($_POST['password']) ){

                        $this->user->setUsername($_POST['email']);
                        $this->user->setPassword($_POST['password']);
                        $this->user = $this->user->getUserByUsername($_POST['email'])[0];

                        $this->user->$action();
                    }
                }else if($action == 'register'){
                    if(isset($_POST['email']) && isset($_POST['password']) ){

                        $this->user->setUsername($_POST['username']);
                        $this->user->setPassword($_POST['password']);

                        $this->user->$action();
                    }
                }

                if(class_exists($viewClass)){

                $view = new $viewClass($this->user);

                }

            }
    }
    }
}

?>
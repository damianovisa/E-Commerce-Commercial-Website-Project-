<?php 
namespace controllers;

require(dirname(__DIR__)."/models/user.php");

class UserController{

    function __construct(){
        if(isset($_GET['action'])){

            $action = $_GET['action'];

            $viewClass = "\\views\\"."User".ucfirst($action);

            // Read the user information from the request
            // and setup a user model object
            $this->user = new \models\User();

            if(class_exists($viewClass)){

            $view = new $viewClass($this->user);

            }

        }
    }
}

?>
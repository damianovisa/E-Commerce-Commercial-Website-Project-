<?php
namespace views;

class UserLogout{

    private $user;

    function __construct($user){

        $this->user = $user;

        $this->user->getMembershipProvider()->logout();

        header('Location:index.php?resource=user&action=login');
    }
}
?>
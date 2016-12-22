<?php
/**
 * Created by PhpStorm.
 * User: khalil
 * Date: 13/12/2016
 * Time: 19:56
 */
    include ("Managers/UsersManager.php");
   // include ("Class/User.php");
	session_start();
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];
    $user_manager=new UsersManager();
    $user=$user_manager->connect($username,$password);
    if ($user!==null){
        $_SESSION['user_session'] = $user->getId();
        $_SESSION['user_name'] = $user->getUsername();
        $_SESSION['account_type'] = $user->getAccountType();
        echo "ok";
    }
    else{
        echo "Not ok";
    }


?>
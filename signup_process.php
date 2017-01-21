<?php
/**
 * Created by PhpStorm.
 * User: khalil
 * Date: 14/12/2016
 * Time: 17:05
 */


include ("Managers/UsersManager.php");
// include ("Class/User.php");
session_start();
$username = $_POST['register_username'];
$firstname = $_POST['register_firsName'];
$secondname = $_POST['register_firsName'];
$email = $_POST['register_email'];
$password = $_POST['register_password'];
$user_manager=new UsersManager();
$user=$user_manager->signup($username,$firstname,$secondname,$email,$password);
if ($user!==null){
    $_SESSION['user_session'] = $user->getId();
    $_SESSION['user_name'] = $user->getUsername();
    $_SESSION['account_type'] = $user->getAccountType();
    echo "ok";
}
else{
    echo "Not ok";
}


<?php
require_once 'Class/User.php';
/**
 * Created by PhpStorm.
 * User: khalil
 * Date: 11/12/2016
 * Time: 16:08
 */
class UsersManager
{

    public function __construct()
    {

    }


    public function connect($username,$password){
        require_once 'includes/config.php';
        try
        {
            $stmt = $db_con->prepare("SELECT * FROM users WHERE username=:username");
            $stmt->execute(array(":username"=>$username));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
            if($count >=1) {
                if ($row['password'] == $password) {
                    return (new User($row['id'] ,$row['username'],$row['firstName'],$row['secondName'],$row['email'],$row['password'],$row['accounttype_id'])); // log in
                } else {

                    return null; // wrong details
                }
            }
            else {

                return null; // wrong details
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }

    }


    public  function signup($username,$firstname,$secondname,$email,$password){
        require_once 'includes/config.php';
        try
        {
             $stmt = $db_con->prepare("insert into `users` (`username`, `password`, `email`, `firstName`, `secondName`, `accounttype_id`) values
           (?,?,?,?,?,?)");
            $stmt->bindParam( 1, $username );
            $stmt->bindParam( 2, $password );
            $stmt->bindParam( 3, $email );
            $stmt->bindParam( 4, $firstname );
            $stmt->bindParam( 5, $secondname );
            $type = 2;
            $stmt->bindParam( 6, $type,PDO::PARAM_INT );
            $var = $stmt->execute();
            if($var == TRUE){
                $stmt = $db_con->prepare("SELECT * FROM users WHERE username=:username");
                $stmt->execute(array(":username"=>$username));
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $count = $stmt->rowCount();
                if($count >=1) {
                        return (new User($row['id'] ,$row['username'],$row['firstName'],$row['secondName'],$row['email'],$row['password'],$row['accounttype_id'])); // log in
                    } else {

                        return null; // wrong details
                    }
                 }
    }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }



    public function resetpassowrd($email){
        require_once 'includes/config.php';
        $stmt = $db_con->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->execute(array(":email"=>$email));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $stmt->rowCount();
        if($count >=1){
            return (new User($row['id'] ,$row['username'],$row['firstName'],$row['secondName'],$row['email'],$row['password'],$row['accounttype_id'])); // log in
        }
        else{
            return null;
        }


    }

}
?>
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
                if ($row['password'] == md5($password)) {
                    return (new User($row['idusers'] ,$row['username'],$row['firstName'],$row['secondName'],$row['email'],$row['password'],$row['idAccount_type'])); // log in
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

}
?>
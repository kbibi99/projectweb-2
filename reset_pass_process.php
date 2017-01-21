<?php
/**
 * Created by PhpStorm.
 * User: khalil
 * Date: 21/01/2017
 * Time: 13:34
 */


include ("Managers/UsersManager.php");

// include ("Class/User.php");
session_start();
$email = $_POST['lost_email'];
$user_manager=new UsersManager();
$user=$user_manager->resetpassowrd($email);
if ($user!==null) {
    $username =$user->getUsername();
    $password= $user->getPassword();
    require "includes/PHPMailer/PHPMailerAutoload.php";
    require "includes/PHPMailer/class.smtp.php";
    require "includes/config.php";
    $stmt = $db_con->prepare("SELECT * FROM infos");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $mail = new PHPMailer();
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $row['smtpserver'];  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $row['smtpuser'];                 // SMTP username
    $mail->Password =  $row['smtppass'] ;                     // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    $mail->Port=$row['smtpport']; ;

    $mail->From = $row['smtpuser'];
    $mail->FromName = $row['name'] . ' webmaster';
    $mail->addAddress($user->getEmail(), $user->getUsername());     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Password reset';
    $mail->Body = "<p>Hi <b> $username </b> , <br>
you have requested  the password of your account.<br>
here you find informations to login<br>
<b>username : $username </b>  <br>
<b>password : $password </b> <p>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo "Not ok";
    } else {
        echo "ok";
    }

}


?>
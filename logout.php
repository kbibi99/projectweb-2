<?php
/**
 * Created by PhpStorm.
 * User: khalil
 * Date: 14/12/2016
 * Time: 14:54
 */

	session_start();
	unset($_SESSION['user_session']);
    unset($_SESSION['user_session']);
    unset($_COOKIE["user"]);
    unset($_COOKIE["username"]);
    unset($_COOKIE["account"]);
setcookie('user', null, time()-60480455516, '/');
setcookie('username', null, time()-60480455516, '/');
setcookie('account', null, time()-60480455516 , '/');


	if(session_destroy())
    {
        header("Location: index.php");
    }
?>
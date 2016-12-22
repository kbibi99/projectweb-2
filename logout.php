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


	if(session_destroy())
    {
        header("Location: index.php");
    }
?>
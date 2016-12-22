<?php

/**
 * Created by PhpStorm.
 * User: khalil
 * Date: 11/12/2016
 * Time: 15:58
 */



	$db_host = "localhost";
	$db_name = "ventmatinfo";
	$db_user = "root";
	$db_pass = "";

	try{

        $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
        $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }


?>
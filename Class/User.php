<?php

/**
 * Created by PhpStorm.
 * User: khalil
 * Date: 11/12/2016
 * Time: 15:47
 */
class User
{
    private $_id;
    private  $_first_name;
    private $_second_name;
    private $_email;
    private $_password;
    private $_username;
    private $_account_type;

    /**
     * User constructor.
     * @param $_id
     * @param $_first_name
     * @param $_second_name
     * @param $_email
     * @param $_password
     */
    public function __construct($_id, $_username, $_first_name, $_second_name, $_email, $_password ,$_account)
    {
        $this->_id = $_id;
        $this->_username = $_username;
        $this->_first_name = $_first_name;
        $this->_second_name = $_second_name;
        $this->_email = $_email;
        $this->_password = $_password;
        $this->_account_type = $_account;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return mixed
     */
    public function getAccountType()
    {
        return $this->_account_type;
    }

    /**
     * @param mixed $account_type
     */
    public function setAccountType($account_type)
    {
        $this->_account_type = $account_type;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->_first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->_first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getSecondName()
    {
        return $this->_second_name;
    }

    /**
     * @param mixed $second_name
     */
    public function setSecondName($second_name)
    {
        $this->_second_name = $second_name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }



}

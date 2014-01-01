<?php

namespace AnyContent\Client;

class UserInfo
{

    protected $username;

    protected $firstname;

    protected $lastname;

    protected $timestamp;


    public function __construct($username = '', $firstname = '', $lastname = '', $timestamp = null)
    {
        $this->setUsername($username);
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setTimestamp($timestamp);
    }


    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }


    public function getFirstname()
    {
        return $this->firstname;
    }


    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }


    public function getLastname()
    {
        return $this->lastname;
    }


    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function userNameIsAnEmailAddress()
    {
        if (filter_var($this->getUsername(), FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }


    public function getTimestamp()
    {

        return $this->timestamp;
    }
}
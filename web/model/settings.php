<?php

class Settings
{
    private $_dbname = "";
    private $_password = "";
    private $_host = "";
    private $_username = "";

    public function __construct()
    {
        $this->_dbname = "projectX";
        $this->_password = "root";
        $this->_host = "localhost";
        $this->_username = "root";
    }

    /**
     * return database name
     * @return string
     */
    public function GetDbName()
    {
        return $this->_dbname;
    }

    /**
     * return database password
     * @return string
     */
    public function GetPassword()
    {
        return $this->_password;
    }

    /**
     * return database hostname
     * @return string
     */
    public function GetHost()
    {
        return $this->_host;
    }

    /**
     * return database usernme
     * @return string
     */
    public function GetUsername()
    {
        return $this->_username;
    }

}

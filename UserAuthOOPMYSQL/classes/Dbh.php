<?php

class Dbh {
    private $hostname = '127.0.0.1';
    private $username = 'root'; 
    private $password = '';
    private $dbname = 'zuriphp'; 
    

    protected function connect() {
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        return $conn;
    }
    

}
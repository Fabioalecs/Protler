<?php

class User {
    
    private $name;
    private $email;
    private $password;


    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }


    public function insertUserToDatabase() {
        require_once('../../Entd/Database_User.php');

        $newUser = new DatabaseUser($this->name, $this->email, $this->password);
        $newUser->insertUser();
    }



}
<?php

class DatabaseUser {
   
    private $databaseUserName;
    private $databaseUserEmail;
    private $databaseUserPassword;

    public function __construct($name, $email, $password) {
        $this->databaseUserName = $name;
        $this->databaseUserEmail = $email;
        $this->databaseUserPassword = $password;
    }

    public function insertUser() {

        require_once('../config/Connection_Database.php');

        $query = $pdo->prepare("INSERT INTO usuario (nome, email, senha) 
        VALUES (:name, :email, :password)");

        $query->execute(
            [
                'name' => $this->databaseUserName,
                'email' => $this->databaseUserEmail,
                'password' => $this->databaseUserPassword
            ]
        );

    }



}
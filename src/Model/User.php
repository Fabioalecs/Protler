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


    public function insertUser() {

        require_once(dirname(__DIR__, 2)."\config\Connection_Database.php");

        $query = $pdo->prepare("INSERT INTO usuario (nome, email, senha) 
        VALUES (:name, :email, :password)");

        $query->execute(
            [
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password
            ]
        );

    }



}
<?php

class Project {
    private $userEmail;
    private $projectId;
    private $projectName;
    private $creationDate;
    private $isCompleted; 

    public function __construct($nameOfProject, $userEmail) {
        $this->projectName = $nameOfProject;
        $this->creationDate = (new DateTime())->setTimezone(new DateTimeZone('America/Bahia'))->format('Y-m-d H:i:s');
        $this->projectId = NULL;
        $this->userEmail = $userEmail;
    }

  
    public function insertProjectToDatabase() {

        require_once(dirname(__DIR__, 2)."\config\Connection_Database.php");

        $query = $pdo->prepare("INSERT INTO projeto (nome, data_de_criacao, email_de_usuario) VALUES (:name, :creationDate, :userEmail)");

        $query->execute(
            [
                'name' => $this->projectName,
                'creationDate' => $this->creationDate,
                'userEmail' => $this->userEmail
            ]
            );

    }



}
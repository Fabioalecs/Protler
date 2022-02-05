<?php

class Project {
    private $projectId;
    private $projectName;
    private $creationDate;

    public function __construct($nameOfProject) {
        $this->projectName = $nameOfProject;
        $this->creationDate = (new DateTime())->format('Y-m-d H:i:s');
        $this->projectId = NULL;
    }

  
    public function insertProjectToDatabase() {

        require_once(dirname(__DIR__, 2)."\config\Connection_Database.php");

        $query = $pdo->prepare("INSERT INTO projeto (nome, data_de_criacao) VALUES (:name, :creationDate)");

        $query->execute(
            [
                'name' => $this->projectName,
                'creationDate' => $this->creationDate
            ]
            );



    }

    public function consultProjects() {

        require_once(dirname(__DIR__, 2)."\config\Connection_Database.php");
    
    
        $query = $pdo->prepare("SELECT * FROM projeto");
        $query->execute();
    
        $arrProjects = $query->fetchAll();
        var_dump($arrProjects);
        
    }

    public function createCardProject() {

        
        


    }

}
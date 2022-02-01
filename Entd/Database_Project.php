<?php

class DatabaseProject {

    
    private $databaseProjectId;
    private $databaseProjectName;
    private $databaseCreationDate;
    private $databaseEndDate;
    private $databaseUserEmail;
    
    public function __construct($projectName) {
        $this->databaseProjectName = $projectName;
        $this->databaseCreationDate = (new DateTime())->format('Y-m-d H:i:s');
    }

    public function insertProject() {

        require_once(dirname(__DIR__, 1)."\config\Connection_Database.php");

        $query = $pdo->prepare("INSERT INTO projeto (nome, data_de_criacao) VALUES (:name, :creationDate)");

        $query->execute(
            [
                'name' => $this->databaseProjectName,
                'creationDate' => $this->databaseCreationDate
            ]
            );

    }

}

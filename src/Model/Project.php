<?php

class Project {
    private $projectId;
    private $projectName;
    private $creationDate;
    private $endDate;

    public function __construct($projectName) {
        $this->$projectName = $projectName;
    }

    public function insertProjectToDatabase() {
        require_once('../../Entd/Database_Project.php');

        $newProject = new DatabaseProject($this->projectName);
        $newProject->insertProject();
    }
  

}
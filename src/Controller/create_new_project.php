<?php

require('../Model/Project.php');

$projectName = $_POST['projectname'];

$newProject = new Project($projectName);
$newProject->insertProjectToDatabase();

header('Location: ../View/dashboard.php');






<?php
session_start();

require('../Model/Project.php');

$userEmail = $_SESSION['email'];
$projectName = $_POST['projectname'];

$newProject = new Project($projectName, $userEmail);
$newProject->insertProjectToDatabase();

header('Location: ../View/dashboard.php');






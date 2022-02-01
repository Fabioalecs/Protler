<?php

require('../Model/Project.php');

$newProject = new Project($_POST['projectname']);
$newProject->insertProjectToDatabase();


<?php


function consultProjects() {

    require(dirname(__DIR__, 2)."\config\Connection_Database.php");

    $query = $pdo->prepare("SELECT * FROM projeto");
    $query->execute();

    $result = $query->fetchAll();
    return $result;
    
}

$activeProjects = count(consultProjects());

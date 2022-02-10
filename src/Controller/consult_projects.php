<?php

function consultProjects() {

    require(dirname(__DIR__, 2)."\config\Connection_Database.php");

    $query = $pdo->prepare("SELECT * FROM projeto WHERE email_de_usuario = :email ");
    $query->execute(['email' => $_SESSION['email']]);

    $result = $query->fetchAll();
    return $result;
    
}

$activeProjects = count(consultProjects());

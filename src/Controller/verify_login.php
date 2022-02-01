<?php

require('../../config/Connection_Database.php');

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$stmt = $pdo->prepare("SELECT * FROM usuario WHERE email =:email");

if(!$stmt) {
    throw new Exception("Não foi possível consultar o usuário");
}

$stmt->execute(['email' => $email]);

$result = $stmt->fetch();

if($result && $result->senha === $password) {
    session_start();
    $_SESSION['email'] = $email;
    header('Location: ../View/dashboard.php');
    exit();
}

session_start();
$_SESSION['login_error'] = true;
header('Location: ../../index.php');
exit();




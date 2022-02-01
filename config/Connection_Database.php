<?php 

$env = parse_ini_file('env.ini');

$host = $env['host'];
$user = $env['username'];
$password = $env['password'];
$database = $env['database'];

$pdo = new PDO(
    "mysql:host=$host;dbname=$database",
    $user,
    $password,
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]
);

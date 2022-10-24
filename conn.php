<?php

$host = "127.0.0.1";
$db = "rucas_clothing_store";
$username = "root";
$password = "pass1234";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Data dikembalikan dalam bentuk object bukan array
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    //throw new \PDOExeption($e->getMessage(), (int)$e->getCode());
    echo "Error Connect to Database Msg: ".$e->getMessage();
}

?>

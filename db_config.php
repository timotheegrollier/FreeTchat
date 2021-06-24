<?php

$DB_DSN = "mysql:host=mysql-tims.alwaysdata.net;dbname=tims_tchat";
$DB_USER = "tims_timo";
$DB_PASS = "xx123xx";

// $DB_DSN = "mysql:host=localhost;dbname=tchat";
// $DB_USER = "root";
// $DB_PASS = "";

// CONNEXION BDD 

try {
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS, $options);

    // echo "Connexion &eacute;tablie<br>";
} catch (\Throwable $th) {
    throw $th;
};
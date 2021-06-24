<?php require __DIR__ . "./db_config.php";


$sql = "DELETE FROM message";

if (!isset($_GET["delete"])) {
    $res = $PDO->query($sql);
} else {
    echo "erreur!";
}


if ($sql) {
    header('Location: ./chat.php');
    exit();
}
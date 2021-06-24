<?php require __DIR__ . "./db_config.php";

var_dump($_POST["message"]);


$errors = [];
$data = [];
$sql = $PDO->prepare("INSERT INTO message (text,heure) values (:message,:heure)");



if (!empty($_POST["message"])) {
    $data["message"] = htmlspecialchars(strip_tags($_POST['message']));
    header("location:index.php");
    var_dump($data['message']);
    var_dump($_POST['time']);
    $sql->execute(array("message" => $data["message"], "heure" => $_POST["time"]));
} else {
    header("location:index.php");
}
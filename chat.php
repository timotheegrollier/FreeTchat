<?php require __DIR__ . "./db_config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<?php
$localHour = date("h") + 2;
$theTime = $localHour . date(":i:s");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Chat</title>
</head>

<body>
    <form action="chat_post.php" method="POST" class="container-fluid">
        <input type="text" name="message" class="form-control">
        <input type="hidden" name="time" value=<?php echo $theTime ?>>
        <input type="submit" class="btn btn-primary col-10 col-sm-6 mb-5">
    </form>

    <div class="chat-container">

        <div class="chat">

            <?php
        $sql = "SELECT text , heure FROM message";
        $result = $PDO->query($sql);
        ?>
            <ul class="result"><?php
                            while ($u = $result->fetch(PDO::FETCH_ASSOC)) {
                                echo "<li><span class='mark'>" . $u["heure"] . "</span> "  . $u["text"] . "</li>";
                            } ?>
            </ul>
        </div>
        <a href="deleteChat.php">❌</a>
    </div>
    <div class="logo d-flex align-items-center justify-content-center flex-column mt-2">
        <div class="logo-text">
            <h1>F**CKING CHAT</h1>
        </div>
        <div class="logo-img"></div>
    </div>

</body>

</html>
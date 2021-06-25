<?php require __DIR__ . "/db_config.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<?php
// $localHour = date("h") + 2;
$theTime = date("H:i:s");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="./img/cat-hiss-icon.png" />
    <title>FreeTchat | <?=  date("l d ") . "of " . date("F");  ?></title>
</head>

<body>
    <form action="tchat_post.php?action=write" method="POST" class="container-fluid entries">
        <input type="text" id="message" name="message" class="form-control mb-5" autofocus autocomplete="off">
        <input type="hidden" id="time" name="time" value=<?php echo $theTime ?>>
        <input type="submit" id="subBtn" class="btn btn-primary col-10 col-sm-6 mb-5">
    </form>

    <div class="tchat-container">

        <div class="tchat" id="tchatbox">


            <ul class="result">
            </ul>
        </div>
        <a href="deleteTchat.php">❌</a>
    </div>
    <div class="logo d-flex align-items-center justify-content-center flex-column mt-2">
        <div class="logo-text">
            <h1>FREE TCHAT</h1>
        </div>
        <div class="logo-img"></div>
    </div>


    <script src="app.js"></script>
    <script src="script.js"></script>
</body>

</html>
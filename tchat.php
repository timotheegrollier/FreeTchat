<?php require __DIR__ . "/db_config.php"; ?>
<?php require __DIR__ . "/date.php"; ?>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Tims | <?=  dateToFrench("now" ,"l j F Y");  ?></title>
</head>

<body>
    <div class="tchatContainer d-flex flex-column-reverse justify-content-around">

        <form action="" method="POST" class="container-fluid entries ">
            <input type="text" id="message" name="message" class="form-control mb-3" autofocus autocomplete="off">
            <input type="hidden" id="time" name="time" value=<?php echo $theTime ?>>
            <input type="submit" id="subBtn" class="btn btn-primary col-10 col-sm-6 ">
        </form>

        <div class="tchat-container">
            <div class="trash"><i class="fas fa-trash"></i></div>

            <div class="tchat" id="tchatbox">


                <ul class="result">
                </ul>
            </div>
        </div>

        <div class="logo d-flex align-items-center justify-content-center flex-column">
            <div class="logo-text">
                <h1>TIMS</h1>
            </div>
            <div class="logo-img"></div>
        </div>

    </div>

    <script src="app.js"></script>
    <script src="script.js"></script>
</body>

</html>
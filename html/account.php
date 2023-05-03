<?php 
    session_start();
    if(!isset($_SESSION['loggato'])|| $_SESSION['loggato']!== true){
        header("location: areaClienti.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GoGreen</title>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="../css/headerFooter.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" href="../res/GoGreen-vuoto.png">
</head>
<body>
    <?php
        if (isset($_SESSION['loggato'])) {
            // L'utente ha effettuato il login
            include './components/headerLogged.html';
        } else {
            // L'utente non ha effettuato il login
            include './components/header.html';
        }
    ?>
    <section>
    </section>
    <?php include './components/footer.html'; ?>
</body>
</html>
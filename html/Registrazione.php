<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GoGreen</title>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lora" />
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/registrazione.css">
    <link rel="icon" href="../res/GoGreen-vuoto.png">
</head>
<body>
    <?php include './components/header.html';?>
    <section>
        <aside>
            <h1>Non sei ancora registrato?</h1>
            <h2>Cosa aspetti!</h2>
            <p>Registrandoti alla nostra <b>area clienti</b> avrai accesso a una serie di vantaggi esclusivi. <br> Potrai gestire facilmente <b>le tue prenotazioni</b> di car sharing, visualizzare lo storico delle tue prenotazioni e accedere a <b>offerte</b> e <b>promozioni</b> riservate ai nostri clienti fedeli. <br> Inoltre, la registrazione è semplice e veloce. <br> Unisciti alla nostra <b>community</b> di utenti soddisfatti <br> e sfrutta al massimo i vantaggi del <b>car sharing!</b></p>
            <h3>Sei già cliente GoGreen?</h3>
            <a href="AreaClienti.php"> Accedi all'area clienti </a>
        </aside>
        <form action="../scripts/RegisterUser.php" method="post">
            <h1>Inserisci i tuoi dati</h1>
            <input type="text" id="firstname" name="firstname" placeholder="Nome" required>
            <input type="text" id="lastname" name="lastname" placeholder="Cognome" required>
            <input type="email" id="email" name="email" placeholder="Email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.(com|it|org|net|edu|gov|mil|biz|info|io|me|tv|co)$">
            <input type="password" id="pass" name="pass" placeholder="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+,-.;'/?[\]{}|`~=:]).{8,}$" title="La password deve contenere almeno un numero, una lettera maiuscola, una lettera minuscola, un carattere speciale e minimo 8 caratteri">
            <input type="checkbox" onclick="myFunction()"> <p>Mostra password</p>
            <input type="password" id="confirm" name="confirm" placeholder="Conferma password" required>
            <span id="error-message"></span>
            <button onclick="inviaFunction()" id="invia">Invia</button>
            <script>
                function inviaFunction() {
                    var element = document.getElementById("invia");
                    element.style.transform ="scale(0.95)";
                    setTimeout(function() {
                        element.style.transform = "";
                }, 150);
            }
            </script>
        </form>
    </section>
    <?php include './components/footer.html'; ?>
</body>
</html>
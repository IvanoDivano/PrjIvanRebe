<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GoGreen</title>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="../css/headerFooter.css">
    <link rel="stylesheet" href="../css/registrazione.css">
    <link rel="icon" href="../res/GoGreen-vuoto.png">
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION['loggato'])) {
            // L'utente ha effettuato il login
            include './components/headerLogged.html';
        } else {
            // L'utente non ha effettuato il login
            include './components/header.html';
        }
    ?>
    <section>
        <aside>
            <h2>Non sei ancora registrato?</h2>
            <h3>Cosa aspetti!</h3>
            <p>Registrandoti alla nostra <b>area clienti</b> avrai accesso a una serie di vantaggi esclusivi. <br> Potrai gestire facilmente <b>le tue prenotazioni</b> di car sharing, visualizzare lo storico delle tue prenotazioni e accedere a <b>offerte</b> e <b>promozioni</b> riservate ai nostri clienti fedeli. <br> Inoltre, la registrazione è semplice e veloce. <br> Unisciti alla nostra <b>community</b> di utenti soddisfatti <br> e sfrutta al massimo i vantaggi del <b>car sharing!</b></p>
            <h4>Sei già cliente GoGreen?</h4>
            <a href="areaClienti.php"> Accedi all'area clienti </a>
        </aside>
        <form action="../scripts/RegisterUser.php" method="post">
            <h1>Inserisci i tuoi dati</h1>
            <input type="text" id="firstname" name="firstname" placeholder="Nome" required>
            <input type="text" id="lastname" name="lastname" placeholder="Cognome" required>
            <input type="email" id="email" name="email" placeholder="Email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.(com|it|org|net|edu|gov|mil|biz|info|io|me|tv|co)$">
            <input type="password" id="pass" name="pass" placeholder="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+,-.;'/?[\]{}|`~=:]).{8,}$" title="La password deve contenere almeno un numero, una lettera maiuscola, una lettera minuscola, un carattere speciale e minimo 8 caratteri">
            <input type="checkbox" onclick="ShowPsw()"> <p>Mostra password</p>
            <input type="password" id="confirm" name="confirm" placeholder="Conferma password" required>
            <div id="error-message"></div>
            <button onclick="inviaFunction()" id="invia">Invia</button>
            <script>
                //mostra/nascondi password
                function ShowPsw(){
                    var x = document.getElementById("pass");
                    var y = document.getElementById("confirm");
                    if ((x.type === "password" && y.type === "password") || x.type === "password" || y.type === "password") {
                        x.type = "text";
                        y.type = "text";
                    } else if (x.value === "" && y.value === "") {
                         x.type = "password";
                         y.type = "password";
                    } else {
                        x.type = "password";
                        y.type = "password";
                    }
                }

                //controllo se le password coincidono
                const passwordInput = document.getElementById('pass');
                const confirmPasswordInput = document.getElementById('confirm');
                const errorMessage = document.getElementById('error-message');

              confirmPasswordInput.addEventListener('input', function() {
                    if (confirmPasswordInput.value === '') {
                          errorMessage.textContent = '';
                      } else if (passwordInput.value !== confirmPasswordInput.value) {
                      errorMessage.textContent = 'Le password non coincidono';
                    } else {
                      errorMessage.textContent = '';
                    }
                });
                passwordInput.addEventListener('input', function() {
                    if (confirmPasswordInput.value === '') {
                          errorMessage.textContent = '';
                      } else if (passwordInput.value !== confirmPasswordInput.value) {
                      errorMessage.textContent = 'Le password non coincidono';
                    } else {
                      errorMessage.textContent = '';
                    }
                });

                //aninimazione bottone 
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
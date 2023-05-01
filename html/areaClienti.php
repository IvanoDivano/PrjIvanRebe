<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GoGreen</title>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="../css/headerFooter.css">
    <link rel="stylesheet" href="../css/areaClienti.css">
    <link rel="icon" href="../res/GoGreen-vuoto.png">
</head>
<body>
    <?php include './components/header.html'; ?> 
    <section>
        <aside>
            <h2>Accedi</h2>
            <h3>alla nostra area clienti</h3>
            <p>Potrai gestire facilmente <b>il tuo account</b> e le tue prenotazioni di car sharing. <br>Potrai visualizzare lo storico delle tue <b>prenotazioni</b>, <br> modificare le tue <b>informazioni personali</b> e gestire i tuoi metodi di pagamento. <br> Inoltre, avrai accesso a <b>offerte esclusive</b> e promozioni riservate ai nostri clienti fedeli. <br>Scopri tutto ciò che l’area clienti ha da offrirti e sfrutta al massimo i vantaggi del car sharing!</p>
            <h4>Non sei ancora cliente GoGreen?</h4>
            <a href="Registrazione.php"> Registrati </a>
        </aside>
        <form action="../scripts/LoginUser.php" method="post">
            <h1>Inserisci i tuoi dati</h1>
            <input type="email" id="email" name="email" placeholder="Inserisci email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.(com|it|org|net|edu|gov|mil|biz|info|io|me|tv|co)$">
            <input type="password" id="pass" name="pass" placeholder="Inserisci password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+,-.;'/?[\]{}|`~=:]).{8,}$" title="La password deve contenere almeno un numero, una lettera maiuscola, una lettera minuscola, un carattere speciale e minimo 8 caratteri">
            <input type="checkbox" onclick="ShowPsw()"> <p>Mostra password</p>
            <button onclick="inviaFunction()" id="invia">Invia</button>
        </form>
        <script>
            function ShowPsw() {
                            var x = document.getElementById("pass");
                            if ( x.type === "password") {x.type = "text";} 
                            else {x.type = "password";}
            }

            function inviaFunction() {
                var element = document.getElementById("invia");
                element.style.transform ="scale(0.95)";
                setTimeout(function() {
                 element.style.transform = "";
                }, 150);
            }
            
        </script>
    </section>
    <?php include './components/footer.html'; ?>
</body>
</html>
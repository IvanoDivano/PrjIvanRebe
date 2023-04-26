<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lora" />
    <title>GoGreen</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/areaClienti.css">
    <link rel="icon" href="../res/GoGreen-vuoto.png">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    <?php include './components/header.html'; ?> 
    <section>
        <aside>
            <h1>Accedi</h1>
            <h2>alla nostra area clienti</h2>
            <h3>Non sei ancora cliente GoGreen?</h3>
            <a href="Registrazone.php"> Registrati </a>
        </aside>
        <form>
            <input type="email" id="email" name="email" placeholder="Inserisci email" required oninvalid="this.setCustomValidity('Il campo è obbligatorio')" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.(com|it|org|net|edu|gov|mil|biz|info|io|me|tv|co)$">
            <input type="password" id="pass" name="pass" placeholder="Inserisci password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+,-.;'/?[\]{}|`~=:]).{8,}$" title="La password deve contenere almeno un numero, una lettera maiuscola, una lettera minuscola, un carattere speciale e minimo 8 caratteri">
            <p id="show-password"><input type="checkbox" onclick="myFunction()"> Mostra password</p>
            <p><a id="linkInvio" href=""><input id="invia" type="submit" value="Invia"></a></p>
            <script>
                function myFunction() {
                    var x = document.getElementById("pass");
                    if ( x.type === "password") {x.type = "text";} 
                    else {x.type = "password";}
                }
                document.getElementById("email").addEventListener("input", function() {
                    this.setCustomValidity("");
                });
            </script>
        </form>
    </section>
    <?php include './components/footer.html'; ?>
</body>
</html>
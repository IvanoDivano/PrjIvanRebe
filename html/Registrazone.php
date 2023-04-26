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
    <?php include './components/header.html';?>
    <section>
        <form action="../scripts/action.php" method="post">
            <input type="text" id="firstname" name="firstname" placeholder="Nome" required>
            <input type="text" id="lastname" name="lastname" placeholder="Cognome" required>
            <input type="email" id="email" name="email" placeholder="Email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.(com|it|org|net|edu|gov|mil|biz|info|io|me|tv|co)$">
            <input type="password" id="pass" name="pass" placeholder="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+,-.;'/?[\]{}|`~=:]).{8,}$" title="La password deve contenere almeno un numero, una lettera maiuscola, una lettera minuscola, un carattere speciale e minimo 8 caratteri">
            <input type="button" onclick="showPwd()" value="Mostra/nascondi password">
            <input type="password" id="confirm" name="confirm" placeholder="Conferma password" required>
            <span id="error-message"></span>

            <script>
                function showPwd() {
                    var input = document.getElementById('pass');
                    if (input.type === "password") {
                         input.type = "text";
                     } else {
                    input.type = "password";
                  }
                }
                const passwordInput = document.getElementById('pass');
                const confirmPasswordInput = document.getElementById('confirm');
                const errorMessage = document.getElementById('error-message');

                confirmPasswordInput.addEventListener('input', function() {
                if (passwordInput.value !== confirmPasswordInput.value) {
                    errorMessage.textContent = 'Le password non coincidono';
                } else {
                    errorMessage.textContent = '';
                }
                });
            </script>
            
            <a href="informazioni.html"><input style="background-color: rgb(165, 14, 14); color: white;" type="submit" value="Invia"></a>
            
            <p>Hai gia' un account? </p>
            <a href="login.html">Login</a>
        </form>
    </section>
    <?php include './components/footer.html'; ?>
</body>
</html>
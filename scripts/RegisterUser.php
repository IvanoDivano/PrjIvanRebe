<?php
    require_once('config.php');

    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pass'])){
         // Sanificazione dei dati inviati dall'utente
        $firstname = $dbConnection->real_escape_string($_POST['firstname']);
        $lastname = $dbConnection->real_escape_string($_POST['lastname']);
        $email = $dbConnection->real_escape_string(strtolower($_POST['email']));
        $pass =  $dbConnection->real_escape_string($_POST['pass']);
    
        $patternEmail = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.(com|it|org|net|edu|gov|mil|biz|info|io|me|tv|co)$";
        $patternPass = "^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+,-.;'/?[\]{}|`~=:]).{8,}$";

        if(!preg_match($patternEmail, $email) || !preg_match($patternPass, $pass)){
            echo "The email or the password is in an incorrect format";
        }

        //hashing password
        $hashedPass = password_hash($pass, PASSWORD_ARGON2I);

        //Query INSERT per memorizzare i dati dell'utente nel database
        $query = "INSERT INTO users VALUES ('$firstname', '$lastname', '$email', '$hashedPass', NULL)";

        if ($dbConnection->query($query) === TRUE){
            // Sanificazione dei dati prima di visualizzarli in una pagina HTML
            $username = htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8');
            echo "Ciao, " . $username . ". Ti sei registrato con successo.";
        }
        else {
            if ($dbConnection->errno === 1062) {
                // Codice di errore 1062: violazione di chiave univoca (email duplicata)
                echo "Errore: l'indirizzo email fornito è già stato utilizzato.";
            } else{
                // Altri errori
                echo "Errore durante la registrazione: " . $dbConnection->error;
            }
        }
    }
    else {
        echo "Errore: i dati non sono stati inviati.";
    }

    $dbConnection->close();
?>
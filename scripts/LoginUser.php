<?php
    session_start();

    require_once('config.php');
    
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $dbConnection->real_escape_string(strtolower($_POST['email']));
        $pass = $dbConnection->real_escape_string($_POST['pass']);
    

        $query = "SELECT * FROM users WHERE Email = '$email'";
        $result = $dbConnection->query($query);

        if($result->num_rows === 1){
            $user = $result->fetch_assoc();

            if (password_verify($pass, $user['Password'])) {
                // Login effettuato con successo
                $_SESSION['loggato'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email']; 
                header('Location: ../html/account.php');
            } else {
                // Password errata
                echo "Errore: la password fornita è errata.";
            }
        }   
        else {
                // L'utente non esiste nel database
                echo "Errore: l'indirizzo email fornito non è registrato.";
            }
        } 
        else {
            // Dati non inviati
            echo "Errore: i dati non sono stati inviati.";
        }
        
        $dbConnection->close();
?>
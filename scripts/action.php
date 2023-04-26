<?php

    $host = 'localhost';
    $user = 'S4797564';
    $dbpw = 'Un_Etto_Di_Cotto';
    $db = 'S4797564';


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $hashedPass = password_hash($pass, PASSWORD_ARGON2I);

    $dbConnection = new mysqli($host, $user, $dbpw, $user);

    if ($dbConnection->connect_error){die('Connection to the database failed: ' . $dbConnection->connect_error);}

    $query = "INSERT INTO users VALUES ('$firstname', '$lastname', '$email', '$hashedPass', NULL)";

    if ($dbConnection->query($query) === TRUE){
        echo "Added new user!";
    }
    else{
        echo "Error adding user: " . $dbConnection->error; 
    }

    $dbConnection->close();
?>
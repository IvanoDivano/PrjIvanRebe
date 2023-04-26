<?php

    $host = 'localhost';
    $user = 'S4797564';
    $dbpw = 'Un_Etto_Di_Cotto';
    $database = 'S4797564';


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $hashedPass = password_hash($pass, PASSWORD_ARGON2I);

    $dbConnection = new mysqli($hostname, $username, $dbpw,$db);

    if ($dbConnection->connect_error){die('Connection to the database failed: ' . $dbConnection->connect_error);}

    $query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashedPass')";

    if ($dbConnection->query($query) === TRUE){
        echo "Added new user!";
    }
    else{
        echo "Error adding user: " . $dbConnection->error; 
    }

    $dbConnection->close();
?>
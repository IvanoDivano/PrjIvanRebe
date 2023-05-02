<?php

    $host = 'localhost';
    $user = 'S4797564';
    $dbpw = 'Un_Etto_Di_Cotto';
    $db = 'S4797564';


    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pass'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = strtolower($_POST['email']);
        $pass = $_POST['pass'];
    }


    $patternEmail = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.(com|it|org|net|edu|gov|mil|biz|info|io|me|tv|co)$";
    $patternPass = "^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+,-.;'/?[\]{}|`~=:]).{8,}$";

    if(!preg_match($email, $patternEmail) || !preg_match($pass, $patternPass)){
        echo "The email or the password is in an incorrect format";
    }

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
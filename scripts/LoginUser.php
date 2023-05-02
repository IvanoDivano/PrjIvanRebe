<?php
session_start();

    $host = 'localhost';
    $user = 'S4797564';
    $dbpw = 'Un_Etto_Di_Cotto';
    $db = 'S4797564';


    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $username = $_POST['email'];
        $pass = $_POST['pass'];
    }

    $connection = mysqli_connect($host, $user, $dbpw, $db);

    $query = "SELECT * FROM users WHERE E-Mail='$email'";

    $results = mysqli_query($connection, $query);

    if(mysqli_num_rows($results) == 1){
        $user = mysqli_fetch_assoc($results);
        $hashedPass = $user['Password'];

        if(password_verify($pass, $hashedPass)){ 
            $_SESSION['email'] = $email; 
            header('location: index.php');
        }
    }



?>
<?php

    session_start();
    
    require_once('config.php');
    
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $username = $_POST['email'];
        $pass = $_POST['pass'];
    }

    $query = "SELECT * FROM users WHERE Email = '$username' AND Pass = '$pass' ";

    $results = mysqli_query($connection, $query);

    if(mysqli_num_rows($results) == 1){
        $user = mysqli_fetch_assoc($results);
        $hashedPass = $user['Password'];

        if(password_verify($pass, $hashedPass)){ 
            $_SESSION['email'] = $username; 
            header('location: index.php');
        }
    }



?>
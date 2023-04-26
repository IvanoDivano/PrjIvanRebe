<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    
    $file = fopen('data.txt', 'a');
    fwrite($file, "$firstname, $lastname, $email, $pass\n");
    fclose($file);
?>
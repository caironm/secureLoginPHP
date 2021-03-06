<?php
include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start(); // Our custom secure way of starting a PHP session.

if (isset($_POST['usuario'], $_POST['p'])){

    $usuario = $_POST['usuario'];
    $password = $_POST['p']; // The hashed password.

    if (login($usuario, $password, $mysqli) == true) {
        // Login success 
        header('Location: ../protected_page.php');
    } else {
        // Login failed 
        header('Location: ../index.php?error=1');
    }
}
else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}
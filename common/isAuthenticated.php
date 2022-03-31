<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        $_SESSION['errorMessage'] = "Please Login !!";
        header('location:login.php');
    }
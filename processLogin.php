<?php
session_start();
$email = htmlspecialchars($_POST['email']);
$password =htmlspecialchars($_POST['password']);
if (
    isset($email) && isset($password)
    && $email === "admin@admin.com"
    && $password === "0000"
) {
    $file = $_FILES['file'];
    if (isset($file) && $file['name']) {
        copy($file['tmp_name'],
            "assets/images/".uniqid().$file['name']
        );
    }
    $_SESSION['user'] =$email;
    header('location:home.php');
} else {
    $_SESSION['errorMessage'] = "bad credentials !!";
    header('location:login.php');
}
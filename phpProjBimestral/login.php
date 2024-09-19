<?php
session_start();

$valid_email = "admin@gmail.com";
$valid_password_hash = md5("admin123");

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($email === $valid_email && md5($password) === $valid_password_hash) {
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    header("Location: array.php");
    exit();
} else {
    echo "Login inválido. <a href='index.php'>Tente novamente</a>.";
}
?>
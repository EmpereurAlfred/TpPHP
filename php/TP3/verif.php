<?php
session_start();
 
$correctLogin = "admin";
$correctPassword = "password";

$login = htmlspecialchars($_POST['login'] ?? '', ENT_QUOTES, 'UTF-8');
$psw = htmlspecialchars($_POST['psw'] ?? '', ENT_QUOTES, 'UTF-8');


if ($login === $correctLogin && $psw === $correctPassword) {
    $_SESSION['user'] = $login; 
    header("Location: home.php");
    exit();
} else {
    $_SESSION['login_error'] = "L'identifiant ou le mot de passe est non valide.";
    header("Location: login.php");
    exit();
}

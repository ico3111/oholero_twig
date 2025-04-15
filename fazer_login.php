<?php

require_once('verifica_login.php');
require('inc/banco.php');

$query = $pdo->prepare('SELECT * FROM users WHERE login = :login');
$query->bindValue(':login', $_POST['login']);
$query->execute();

$user = $query->fetch(PDO::FETCH_ASSOC);

if ($user AND password_verify($_POST['senha'], $user['senha'])) {
    session_start();
    $_SESSION['user'] = $user;
    header('Location: home.php');
    exit;
} else {
    header('Location: index.php');
    exit;
}
<?php

require_once('verifica_login.php');
require('inc/banco.php');

// Preparar e executar a consulta
$query = $pdo->prepare('SELECT * FROM usuarios WHERE login = :login');
$query->bindValue(':login', $_POST['login']);
$query->execute();

// Buscar o usuário
$user = $query->fetch(PDO::FETCH_ASSOC);

// Verificar se o usuário existe e se a senha está correta
if ($user && password_verify($_POST['senha'], $user['senha'])) {
    session_start();
    $_SESSION['user'] = $user;
    header('location:home.php');
    exit;
} else {
    header('location:index.php?login=true&erro=true');
    exit;
}
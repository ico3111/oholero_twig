<?php

require_once('verifica_login.php');
require('inc/banco.php');

$query = $pdo->prepare('INSERT INTO users(login, senha) VALUES (:login, :senha)');
$query->bindValue(':login', $_POST['login']);
$query->bindValue(':senha', password_hash($_POST['senha'], PASSWORD_DEFAULT));
$query->execute();

header('Location: index.php');
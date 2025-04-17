<?php

require_once('verifica_login.php');
require('inc/banco.php');

$id = $_POST['id'] ?? null;
$login = $_POST['login'] ?? null;

$senha_atual = $_POST['senha_atual'] ?? null;
$senha_nova = $_POST['senha_nova'] ?? null;
$confirma_senha_nova = $_POST['confirma_senha_nova'] ?? null;

if (empty($id) || empty($login) || empty($senha_atual) || empty($senha_nova) || empty($confirma_senha_nova)) { header('Location: user.php'); exit; }
if (!password_verify($senha_atual, $_SESSION['user']['senha'])) { header('Location: user.php?erro=senha_incorreta'); exit; }
if ($senha_nova !== $confirma_senha_nova) { header('Location: user.php?erro=senha_diferente'); exit; }

$query = $pdo->prepare('UPDATE users SET login = :login, senha = :senha WHERE id = :id');
$query->bindValue(':id', $id);
$query->bindValue(':login', $login);
$query->bindValue(':senha', password_hash($senha_nova, PASSWORD_DEFAULT));
$query->execute();

$_SESSION['user']['login'] = $login;
$_SESSION['user']['senha'] = password_hash($senha_nova, PASSWORD_DEFAULT);

header('Location: user.php?sucesso=1');
exit;
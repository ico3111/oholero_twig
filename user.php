<?php

require_once('verifica_login.php');
require_once('twig_carregar.php');

$nome = $_SESSION['user']['login'];

$erro = $_GET['erro'] ?? null;
$sucesso = $_GET['sucesso'] ?? null;

echo $twig->render('user.html', [
    'titulo' => "Usuário $nome",
    'erro' => $erro,
    'sucesso' => $sucesso,
    'nome' => $nome,
    'logado' => $logado
]);

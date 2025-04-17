<?php

require_once('verifica_login.php');
require_once('twig_carregar.php');

$nome = $_SESSION['user']['login'];

$mensagem = isset($_GET['erro']) ?? $_GET['erro'];
$mensagem = isset($_GET['sucesso']) ?? $_GET['sucesso'];

echo $twig->render('user.html', [
    'titulo' => "Usuário $nome",
    'mensagem' => $mensagem,
    'nome' => $nome, 
    'logado' => $logado
]);
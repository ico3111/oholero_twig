<?php

require_once('verifica_login.php');
require_once('twig_carregar.php');

$frutas = ['abacaxi', 'maça', 'banana', 'malencia', 'estrogonoff de urubu'];
$frutaHoje = $frutas[rand(0, 4)];


echo $twig->render('home.html', [
    'titulo' => 'Bem-Vindo',
    'nome' => $_SESSION['user']['login'],
    'fruta' => $frutaHoje, 
    'logado' => $logado
]);
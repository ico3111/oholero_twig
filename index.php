<?php

// Carrega o carregador do Twig
require_once('twig_carregar.php');

$frutas = ['abacaxi', 'maça', 'banana', 'malencia', 'estrogonoff de urubu'];
$frutaHoje = $frutas[rand(0, 4)];

//Mostra o template na tela
echo $twig->render('index.html', [
    'titulo' => 'Bem-Vindo',
    'fruta' => $frutaHoje
]);
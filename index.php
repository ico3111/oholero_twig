<?php

//carrega o carregador do Twig
require_once('twig_carregar.php');


//Mostra o template na tela
echo $twig->render('index.html', [
    'frutas' => ['Abacate', 'Melancia', 'Abacaxi']
]);
<?php

require_once('verifica_login.php');
require_once('twig_carregar.php');

echo $twig->render('compras_form.html', [
    'id' => $_GET['id'],
    'item' => $_GET['item'], 
    'logado' => $logado
]);
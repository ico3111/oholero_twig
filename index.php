<?php

require_once('verifica_login.php');

if (!isset($_GET['login']) || $_GET['login']) {
    echo $twig->render('login.html');
} else if (!$_GET['login']) {
    echo $twig->render('login.html');
} else {
    echo $twig->render('erro.html', ["erro" => "Página não encontrada"]);
}
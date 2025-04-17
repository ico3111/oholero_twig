<?php

require_once('verifica_login.php');
require_once('twig_carregar.php');

echo $twig->render('user_form.html', [
    'titulo' => 'Editar Usuário '. $_SESSION['user']['login'],
    'id' => $_SESSION['user']['id'],
    'login' => $_SESSION['user']['login'],
    'logado' => $logado
]);
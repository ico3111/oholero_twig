<?php

require_once('verifica_login.php');
require_once('twig_carregar.php');

echo $twig->render('login.html', ['titulo' => 'Login', 'logado' => $logado]);
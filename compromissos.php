<?php

require_once('twig_carregar.php');
require('inc/banco.php');

use Carbon\Carbon;

date_default_timezone_set('America/Sao_Paulo');

$dados = $pdo->query('SELECT * FROM compromissos');

$comp = $dados->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('compromissos.html', [
    'titulo' => 'Compromissos',
    'compromissos' => $comp,
    'data' => Carbon::now()->format('Y-m-d')
]);
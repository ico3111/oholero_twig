<?php

require_once('verifica_login.php');
require_once('twig_carregar.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

echo $twig->render('horario.html', [
    'titulo' => 'Horários',
    'horarioHoje' => Carbon::now()->format('d/m/Y - H:m:s'),
    'dataAmanha' => Carbon::now()->addDay()->format('d/m/Y'), 
    'logado' => $logado
]);
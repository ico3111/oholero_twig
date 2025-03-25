<?php

require_once('twig_carregar.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

echo $twig->render('horario.html', [
    'titulo' => 'Horários',
    'horarioHoje' => Carbon::now(),
    'dataAmanha' => Carbon::now()->addDay() 
]);
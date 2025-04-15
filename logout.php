<?php

require_once('verifica_login.php');
require_once('twig_carregar.php');
session_start();

if (isset($_SESSION['user'])) { 
    session_destroy(); 
    header('Location: index.php');
}
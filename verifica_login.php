<?php

require_once('twig_carregar.php');
session_start();

if (!isset($_SESSION['user']) AND (
    basename($_SERVER['PHP_SELF']) != 'index.php' OR
    basename($_SERVER['PHP_SELF']) != 'logar.php' OR
    basename($_SERVER['PHP_SELF']) != 'cadastrar.php')) 
{
    header('Location: index.php?login=true');
}
<?php

session_start();

if (!isset($_SESSION['user']) 
    AND basename($_SERVER['PHP_SELF']) != 'index.php'
    AND basename($_SERVER['PHP_SELF']) != 'cadastro.php'
    AND basename($_SERVER['PHP_SELF']) != 'fazer_login.php'
    AND basename($_SERVER['PHP_SELF']) != 'fazer_cadastro.php') 
{
    header('Location: index.php');
    $logado = false;
}
else if (isset($_SESSION['user'])) {
    $logado = true;
}
else {
    $logado = false;
}
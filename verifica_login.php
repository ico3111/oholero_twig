<?php

session_start();

$paginas_livres = ['index.php', 'cadastro.php', 'fazer_login.php', 'fazer_cadastro.php'];
$pagina_atual = basename($_SERVER['PHP_SELF']);
$logado = isset($_SESSION['user']);

if (!$logado && !in_array($pagina_atual, $paginas_livres)) {
    header('Location: index.php');
    exit;
}
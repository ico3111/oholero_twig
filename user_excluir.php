<?php

require_once('verifica_login.php');
require('inc/banco.php');

$id = $_SESSION['user']['id'];

if($id){
    $query = $pdo->prepare('DELETE FROM users WHERE id = :id');

    $query->bindValue(':id', $id);

    $query->execute();
}

header('Location: logout.php');
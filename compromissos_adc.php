<?php

require('inc/banco.php');

$titulo = $_POST['titulo'] ?? null;
$data = $_POST['data'] ?? null;

if ($titulo) {
  //prepara a consulta
  $query = $pdo->prepare('INSERT INTO compromissos (titulo, data) VALUES (:titulo, :data)');

  //associa os valores dentro da consulta
  $query->bindValue(':titulo', $titulo);
  $query->bindValue(':data', $data);

  //executa a consulta
  $query->execute();
}
header('location:compromissos.php');

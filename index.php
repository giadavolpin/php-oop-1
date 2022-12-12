<?php
include_once __DIR__ . '/Models/user.php';

$nome_film = new Movie('Titanic', 'romantico', '1997', '10');

var_dump($nome_film);
?>
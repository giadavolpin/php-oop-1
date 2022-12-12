<?php
include_once __DIR__ . '/Models/user.php';

$titanic = new Movie('Titanic', 'romantico', 1997, 10);
var_dump($titanic);

$avatar = new Movie('Avatar', 'fantascienza', 2009, 10);
var_dump($avatar);
?>
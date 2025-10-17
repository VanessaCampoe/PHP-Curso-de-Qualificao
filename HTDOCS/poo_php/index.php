<?php 
include 'classes/cachorro.php';

$cachorro1 = new Cachorro();
$cachorro1->nome = "Fred";
$cachorro1->raca = "Pug";
$cachorro1->idade = 3;
$cachorro1->exibirDados();
$cachorro1->latir();
?>
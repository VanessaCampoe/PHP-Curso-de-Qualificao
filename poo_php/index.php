<?php 
include 'classes/cachorro.php';

$cachorro1 = new Cachorro();
$cachorro1->nome = " Fred";
$cachorro1->raca  = " Pug";
$cachorro1->idade = " 3";
$cachorro1->exibirDados();
$cachorro1->latir();


// echo "Nome:".$cachorro1->nome."<br>";
// echo "Raça:".$cachorro1->raca."<br>";
// echo "Idade:".$cachorro1->idade."<br>";
// le exixtia por ser um teste para ver se a classe funcionava 




?>
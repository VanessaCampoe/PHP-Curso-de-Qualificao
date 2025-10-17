<?php 
$idade = 20;
$temDocumento = false;

//Ternário
echo ($idade >= 18)?"Maior de idade":"Menor de Idade";
echo "<br>";

//Nested if
if ($idade >= 18){
    if ($temDocumento) {
        echo "Entrada permitida";
    } else {
        echo "Maior, mas sem documento";
    }
} else {
    echo "Menor de idade";
}
?>
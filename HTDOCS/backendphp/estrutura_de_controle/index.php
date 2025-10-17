<?php 
$idade = 6;

if($idade >= 18){
    echo "Você é maior de idade<br>";
} elseif($idade <= 5){
    echo "Você é um bebê<br>";
}else {
    echo "Você é menor de idade<br>";
}

//Cadeia de elseif
$nota = 75;

if ($nota >= 90){
    echo "Excelente";
} elseif ($nota >= 80){
    echo "Ótimo";
} elseif ($nota >= 60){
    echo "Bom<br>";
} else {
    echo "Ruim";
}



$idade = 17;
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
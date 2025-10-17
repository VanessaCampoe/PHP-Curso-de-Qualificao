<?php
$numero = 15;

//Classificação Númerica
if ($numero > 100){
    echo "Número muito grande";
} elseif ($numero >= 50 && $numero <= 100){
    echo "Número médio";
} else {
    echo "Número pequeno<br>";
}

//Identificação mês
$mes = 1;

switch($mes){
    case 1: echo "Janeiro<br>";break;
    case 2: echo "Fevereiro";break;
    case 3: echo "Março";break;
    case 4: echo "Abril";break;
    case 5: echo "Maio";break;
    case 6: echo "Junho";break;
    case 7: echo "Julho";break;
    case 8: echo "Agosto";break;
    case 9: echo "Setembro";break;
    case 10: echo "Outubro";break;
    case 11: echo "Novembro";break;
    case 12: echo "Dezembro";break;
}

$i = 2;
while ($i <= 20) {
echo $i . "<br>";
$i+=3;
}
?>
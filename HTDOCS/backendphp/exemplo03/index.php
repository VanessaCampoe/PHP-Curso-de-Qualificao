<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php 
    $numero1 = 10;
    $numero2 = 3;

    echo "Soma: ".($numero1 + $numero2)."<br>";
    echo "Subtração: ".($numero1 - $numero2)."<br>";
    echo "Multiplicação: ".($numero1 * $numero2)."<br>";
    echo "Divisão: ".($numero1 / $numero2)."<br>";
    echo "Resto da Divisão: ".($numero1 % $numero2)."<br>";

    echo "É maior? ".($numero1 > $numero2)."<br>";
    echo "É igual? ".($numero1 == $numero2)."<br>";
    ?>
</body>
</html>
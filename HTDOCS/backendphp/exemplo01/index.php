<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <?php 
    // Código PHP aqui
    echo "Olá, Mundo!"."<br>";

    // Variáveis
    $nome = "Max Müller"; // String(texto)
    $idade = 34; // Inteiro
    $altura = 1.76; // Número com decimal (float)

    echo "Nome: ".$nome."<br>";
    echo "Idade: ".$idade."<br>";
    echo "Altura: ".$altura."<br>";


    // Constantes
    const URL_DO_SITE = "https";
    echo "Acesse: ".URL_DO_SITE."<br>";

    define("TAXA_DE_IMPOSTO", 0.15);
    echo "A taxa de imposto é: ".TAXA_DE_IMPOSTO."<br>";

    echo "Arquivo: ".__FILE__."<br>";
    echo "Linha: ".__LINE__."<br>";
    echo "Diretório: ".__DIR__."<br>";
    ?>
</body>
</html>
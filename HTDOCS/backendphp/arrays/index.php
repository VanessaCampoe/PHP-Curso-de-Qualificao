<?php 
// Arrays Indexados
$frutas = array("Maça","Banana","Laranja");
$cores[0] = "Vermelho";
$cores[1] = "Verde";
$cores[2] = "Azul";
$animais[] = "Cachorro";
$animais[] = "Gato";
$animais[] = "Pássaro";

// Acessando Elementos
echo $frutas[0]."<br>";
echo $cores[2]."<br>";

//Percorrendo Arrays
echo "<h4>Usando for:</h4>";
for ($i = 0; $i < count($frutas); $i++){
    echo $frutas[$i]."<br>";
}

echo "<h4>Usando foreach:</h4>";
foreach ($animais as $animal) {
    echo $animal."<br>";
}
//Arrays Associativos
$aluno = array(
    "nome" => "João",
    "idade" => 22,
    "cidade" => "Brasília"
);
$produto["nome"] = "Notebook";
$produto["preco"] = 3500.00;
$produto["estoque"] = 10;

//Acessando elementos
echo $aluno["nome"]."<br>";
echo $produto["nome"]."<br>";

//Percorrendo arrays associativos
foreach ($aluno as $chave => $valor){
    echo $chave.": ".$valor."<br>";
}

//Atividade
$pratos = array(
    "Pizza" => 25,
    "Refrigerante" => 7,
    "Hambúrguer" => 20,
    "Salada" => 15
);

$pratos["Novo Prato"] = 35;

echo "<h2>Cardápio</h2>";
echo "<ul>";
$total = 0;
foreach ($pratos as $nome => $preco){
    echo "<li>{$nome}  R$ {$preco}</li>";
    $total += $preco;
}
echo "</ul>";
echo "<p>Valor total do pedido: R$ {$total}</p>";









//Array Multidimensional
$produtos = array(
    array("nome" => "Notebook","quantidade" => 10,"preco" =>3500),
    array("nome" => "Teclado","quantidade" => 25,"preco" => 100),
    array("nome" => "Mouse", "quantidade" => 40,"preco" =>70)
);
echo "<h2>Estoque da Loja</h2>";

//Cabeçalho e Tabela
echo "<table borde='1' cellpading='5' cellpacing='0'>";
echo "<tr><th>Nome</th><th>Quantidade</th><th>Preço</th><th>Valor Total</th></tr>";

$valor_total_geral = 0;

foreach($produtos as $produto){
    $valor_total = $produto["quantidade"] * $produto["preco"];
    $valor_total_geral += $valor_total;
    
    echo "<tr>";
    echo "<td>{$produto['nome']}</td>";
    echo "<td>{$produto['quantidade']}</td>";
    echo "<td>{$produto['preco']}</td>";
    echo "<td>{$valor_total}</td>";
    echo "</tr>";
}
echo "</table>";
echo "<p>Valor total do estoque: R$ {$valor_total_geral}</p>";
?>
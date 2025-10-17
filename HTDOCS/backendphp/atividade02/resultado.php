<?php 

$produto = $_GET['produto'];
$preco = $_GET['preco'];

echo "<h2>Resultado da pesquisa</h2>";
echo "Produtos pesquisados: $produto <br>";
echo "Faixa de preço: $preco <br><hr>";
echo "<p>URL completa:" .$_SERVER['REQUEST_URI']."</p>";

?>
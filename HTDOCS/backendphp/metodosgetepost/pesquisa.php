<?php 
if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
    echo "<h2>Resultado da Pesquisa</h2>";
    echo "<p>Você pesquisou pelo nome: $nome</p>";
    echo '<a href="index.php">Voltar</a>';
} else {
    echo "<p>Nenhum nome foi informado</p>";
    echo '<a href="index.php">Voltar</a>';
}
?>
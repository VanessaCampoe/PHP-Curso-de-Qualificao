<?php 


if(isset($_GET['nome'])){
    $nome = $_GET[ 'nome'];
    echo "<h2>Resultado da pesquisa </h2>";
    echo "<p>Voce pesquisaou pelo npme: $nome</p>";
    echo '<a href="index.php">Voltar</a>';
} else {
    echo '<p>Nenhum nome foi informado </p>';
    echo '<a href="index.php">Voltar</a>';
}


?>
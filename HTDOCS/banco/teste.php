<?php 
include 'conexao.php';

//Inserir um produto
$sql = "INSERT INTO produtos (nome, preco) VALUES ('Caneta',2.50)";
if ($conn->query($sql) === TRUE) {
    echo "Produto foi inserido com sucesso<br>";
}

//Buscar produtos
$result = $conn->query("SELECT * FROM produtos");
while($row = $result->fetch_assoc()){
    echo "ID:".$row['id']."-Nome:".$row['nome']."-Preço:".$row['preco']."<br>";
}
?>
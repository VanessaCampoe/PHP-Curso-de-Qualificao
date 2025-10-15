<?php 
include('conexao.php');

// inserir um produto 
$sql = " INSERT INTO produtos (nome, preco)VALUES ('caneta', 2.50)";
if ($conn->query($sql) === TRUE){
}
    echo "Produto foi inserido  com sucesso<br>";

    // buscar produtos 
    $result = $conn->query("SELEC *  FRON produtos ") ;
    while($row = $result->fetch_assoc()){
        echo "ID:".$row["id"].'-Nome:'.$row['nome']."-Preço:".$row['preço']."<br>";
    }


    
    ?>
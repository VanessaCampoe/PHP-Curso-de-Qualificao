<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Bem vindo ao CRUD em PHP</h1>
    <p>Escolha um opção abaixo:</p>
    <ul>
    <li><a href="cadastrar.php">Cadastrar Novo Registro</a></li>
    <li><a href="editar.php"></a>Editar um Registro</li>
    <li><a href="ecluir.php"></a>Excluir um Registro</li>
    </ul>
    
</body>
</html>
<hr>
    <h2>Usuários Cadastrados </h2>
<?php 
$result = mysqli_query($conn, "SELECT * FROM usuario");
if(mysqli_num_rows($result) > 0){
    echo "<table borde='1' cellpadding= '8'>";
    echo "<tr><th>ID</th>Nome</th><th>Email</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" .$row['id']."</td>";
        echo "<td>" .$row['nome']."</td>";
        echo "<td>" .$row['email']."</td>";
        echo "<td>";

    }
    echo "<?table>";
} else {
    echo "<p> NNenhum resgistro econtrado </p>";
}
    
    
?>
<?php 
require_once "config.php";

// verificar se o funcionario fo enviafo 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Inserção ao banco de dados via mysql
    $sql = "INSERT INTO usuarios(nome, email,) VALUES ('$nome', '$email') ";

    if (mysqli_query($conn, $sql)){
        echo "<p>Registro inserido com sucesso </p>";

} else {
    echo "Erro:".mysqli_error($conn);
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <h2>Cadastrar Novo Usuarios </h2>
    <form action="cadastro.php" method="$_POST">
        Nome: <input type="text" name="nome"
        required><br>
        Email:  <input type="email" name="email"
        required><br>
        input <input type="submit" value="Cadastrar"> 
    </form>
    <p><a href="index.php">Voltar á Página Inicial</a></p>
    
</body>
</html>
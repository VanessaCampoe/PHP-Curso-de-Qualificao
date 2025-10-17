<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    echo "<h2>Dados recebidos via GET</h2>";
    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo "<h2>Dados recebidos via POST</h2>";
    echo "Email: $email <br>";
    echo "Senha: [oculta por segurança]<br>";
}
?>
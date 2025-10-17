<?php 

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$cidade = $_POST['cidade'];
$curso = $_POST['curso'];

if (empty($nome) || empty($email) || empty($idade) || empty($cidade) || empty($curso)){
    echo "<h2>Por, favor, preencha todos os campos</h2>";
} else {
    echo "<h2>Comfirmação de cadastro</h2>";
    echo "Olá $nome!<br>";
    echo "Seu interesse no curso $curso foi registrado com sucesso<br>";
    
    echo "<h3>Resumo do Cadastro</h3>";
    echo "E-mail: $email<br>";
    echo "Idade: $idade<br>";
    echo "Cidade: $cidade<br>";
    echo "Data e hora do envio: " .date("d/m/Y H:i:s");
}
?>
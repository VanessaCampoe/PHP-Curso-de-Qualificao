<?php 
if (isset($_POST['nome']) && isset($_POST['email'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "<h2>Cadastro realizado com sucesso</h2>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo '<a href="index.php">Voltar</a>';
} else {
    echo "<p>Dados incompletos. Tente novamente</p>";
    echo '<a href="index.php">Voltar</a>';
}
?>
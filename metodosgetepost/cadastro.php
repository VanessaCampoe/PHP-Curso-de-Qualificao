<?php 
if(isset($_POST['nome'])) && isset($_POST['email']){ 
$nome = $_POST['nome'];
$email = $_POST['email'];

echo "<h2>Cadasto realizado com sucesso </h2>";
echo "<p> nome: $nome</p>";
echo "<p> email: $email</p>";
echo '<a href="index.php">Voltar</a>';
} else {
    echo '<p>Dados incompletos . Tente novamente  </p>';
    echo '<a href="index.php">Voltar</a>';
}



?>
<?php 

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario == "admin" && $senha == "12345"){
    echo "<h2>Login bem sucedido</h2>";
    echo "Bem-vindo $usuario";
} else {
    echo "<h2>Acesso negado</h2>";
    echo "Usuário ou senha incorretos. Tente novamente";
}
?>
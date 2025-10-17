<?php 
if (isset($_COOKIE['nome_usuario'])) {
    $nome = $_COOKIE['nome_usuario'];
    echo "<h1>Bem-vindo de volta, $nome</h1>";
} else {
    echo "<h1>Olá visitante, você não tem cookies salvos</h1>";
} 
echo "<h2>Todos os cookies</h2>";
echo "<pre>";
print_r($_COOKIE);
echo "<pre>";
?>
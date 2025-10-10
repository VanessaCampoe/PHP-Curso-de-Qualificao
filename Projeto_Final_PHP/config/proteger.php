<?php 

// incui a conexao  que por sua vez  inicia a sessão 
include_once(__DIR__. '/conexao.php');

// verificar se a sessão NAO existe 
if (!isset($_SESSION['usuario_id'])) {

    // se o usuario nao exeste , redireciona para o login 
    header("Location:/mini_classificados/auth/login.php? erro=acesso_negado");
    exit();
}

?>
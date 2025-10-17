<?php 
session_start();

//Limpa todas as variáveis da sessão
$_SESSION = array();

//Deleta o cookie de sessão
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600,'/');
}

//Destroi a sessão no servidor
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout realizado</title>
</head>
<body>
    <h1>Logout realizado</h1>
    <p>Sua sessão foi encerrada</p>
    <a href="ver_sessao.php">Voltar</a>
</body>
</html>
<?php 

SESSION_start();

// limpa todas as variaves da sessao 
$_SESSION = array();

// deleta o cookie de sessao 
if (isset($_COOKIE[session_name()])){
    setcookie(session_name(), '',time()-3600,'/');
// destroi  a sessao n servidor 
}
// destroi a sessao 
session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logour realizado </title>
    
</head>
<body>
<h1>Lougout realizado </h1>

<p>Sua sessao foi encerrada </p>
<a href="ver_sessao.php">voltar</a>
</body>
</html>

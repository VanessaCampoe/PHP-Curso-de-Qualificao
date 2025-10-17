<?php 
session_start();
$_SESSION['usuario'] = 'Max Müller';
$_SESSION['email'] = 'max@gmail.com';
$_SESSION['login_time'] = date('H:i:s');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão Criada</title>
</head>
<body>
    <h1>Sessão Iniciada</h1>
    <p>Dados salvos no servidor.</p>
    <a href="ver_sessao.php">Ver dados da sessão</a>
</body>
</html>
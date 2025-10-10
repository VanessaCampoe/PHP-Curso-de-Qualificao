<?php 
session_start();
$_SESSION['usuario'] = 'MAX Müller';
$_SESSION['email'] = 'max@gmail.com';
$_SESSION['login_time'] = date ('H:i:s');
// $_SESSION[''] = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sessao Iniciada </h1>
    <p>Dados salvos no servidor</p>
    <a href="ver_sessao.php">ver dados da sessao</a>
</body>
</html>
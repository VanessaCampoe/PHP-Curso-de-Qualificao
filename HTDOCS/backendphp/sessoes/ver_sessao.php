<?php 
session_start(); //SEMPRE necessario para acessar sessões
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da Sessão</title>
</head>
<body>
    <h1>Dados armazenados na sessão</h1>
    <?php if (isset($_SESSION['usuario'])): ?>
    <ul>
        <li>Usuário: <?=$_SESSION['usuario']?></li>
        <li>Email: <?=$_SESSION['email']?></li>
        <li>Login às: <?=$_SESSION['login_time']?></li>
    </ul>

    <a href="destruir_sessao.php">Fazer Logout</a>
    <?php else: ?>
        <p>Nenhum usuário logado</p>
    <a href="criar_sessao.php">Fazer Login</a>
    <?php endif; ?>

    <h2>Conteúdo completo de $_SESSION:</h2>
    <pre><?php print_r($_SESSION)?></pre>
</body>
</html>
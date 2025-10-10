<?php 
session_start();    //sempre necessario para acessr sessoes 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados armazenados na  sessao </title>
    
   
</head>
<body>
<?php  if (isset($_SESSION['usuario'])):?>
    <ul>
        <li>Usuari<?=$_SESSION['usuario']?></li>
        <li>Email<?=$_SESSION['email']?></li>
       
        <li>Login as: <?=$_SESSION['login_time']?></li>
    </ul>
    <a href="destruir_sessao.php">Fazer Logout</a>
    <?php else: ?>
    <p>Nenhum usuario logado</p>
    <a href="criar_sessao.php">Fazer Login</a>
    <?php endif; ?>
    <h2>Conteudo completo de $_SESSION</h2>
    <pre><?php print_r($_SESSION)?></pre>
</body>
</html>
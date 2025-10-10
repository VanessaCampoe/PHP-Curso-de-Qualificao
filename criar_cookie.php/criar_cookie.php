<?php 
setcookie("nome_usuario", "Rasmus Lerdorf",time() + 1800);


?>
// importante : setcookie() deve vir aNTES DE QUALQUER SAIDA HTML 
// o php w sempr antes do doctype 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cookie criando com sucesso </h1>
    <p>Um cookie chamado 'nome-usuario' foi salcono seu navegador. </p>

</body>
</html>
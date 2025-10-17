<?php 
// IMPORTANTE: setcookie() DEVE vir ANTES de qualquer saída HTML
setcookie("nome_usuario","Rasmus Lerdorf", time() + 1800);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Cookie</title>
</head>
<body>
    <h1>Cookie criado com sucesso</h1>
    <p>Um cookie chamado 'nome_usuario' foi salvo no seu navegador.</p>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contato</title>
</head>
<body>
    <h1>Fale conosco</h1>
    <form action="enviar.php" method="post">
    <label>Seu nome:</label><br>
    <input type="text" name="nome" required><hr>
    <label>Seu e-mail:</label><br>
    <input type="email" name="email" required><hr>
    <label>Mensagem:</label><br>
    <textarea name="mensagem" rows="5" cols="30" required></textarea><hr>
    <button type="submit">Enviar Mensagem</button>
    </form>
</body>
</html>
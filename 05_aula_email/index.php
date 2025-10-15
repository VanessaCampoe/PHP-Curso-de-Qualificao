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

<?php 

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $destinatario = "seuemail@seudominio.com"; //Vamos trocar
    $assunto = "Nova mensagem de $nome";
    $corpo = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";

    //Tentativa de envio
    if (mail($destinatario, $assunto, $corpo)) {
        echo "<h2>Email enviado com sucesso</h2>";
    } else {
        echo "<h2>Não foi possível enviar o e-mail</h2>";
        echo "<p>Mas o script PHP funcionou corretamente</p>";
    }
} else {
    echo "<p>Preencha todos os campos</p>";
}
?>
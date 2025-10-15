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

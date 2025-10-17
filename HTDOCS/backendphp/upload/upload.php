<?php 
// Verificar se o arquivo foi enviado
if(isset($_FILES['arquivo'])) {

    $temporario = $_FILES['arquivo']['tmp_name'];
    $nome = $_FILES['arquivo']['name'];

    $destino = "uploads/" . $nome;

    //Criar a pasta se não existir
    if (!is_dir('uploads')) {
        mkdir('uploads');
    }

    //move o arquivo da pasta temporaria para a pasta destino
    if (move_uploaded_file($temporario, $destino)) {
        echo "<h3>Arquivo enviado com sucesso</h3>";
        echo "<p>Nome do arquivo: $nome</p>";
    } else {
        echo "<p>Falha ao enviar arquivo</p>";
    }
}
?>
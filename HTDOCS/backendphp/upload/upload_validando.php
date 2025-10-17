<?php
if(isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));

    // Extensões permitidas
    $permitidas = ['jpg', 'jpeg', 'png', 'gif'];

    if(in_array($extensao, $permitidas)) {

        if ($arquivo['size'] < 2000000) { // até 2MB
            $nomeUnico = uniqid() . "." . $extensao;
            $destino = "uploads/" . $nomeUnico;

            if(!is_dir('uploads')) {
                mkdir('uploads');
            }

            if (move_uploaded_file($arquivo['tmp_name'], $destino)) {
                echo "<h3>Imagem enviada com sucesso!</h3>";
                echo "<img src='$destino' width='200'>";
            } else {
                echo "<p>Erro ao enviar o arquivo.</p>";
            }
        } else {
            echo "<p>O arquivo é muito grande! Envie até 2MB.</p>";
        }
    } else {
        echo "<p>Formato não permitido! Envie apenas imagens.</p>";
    }
}
?>
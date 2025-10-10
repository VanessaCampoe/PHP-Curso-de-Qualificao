<?php
include_once(__DIR__ . '/../config/proteger.php'); // Protege a página
include_once(__DIR__ . '/../config/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $id_anuncio = intval($_POST['id_anuncio']);
    $id_usuario = $_SESSION['usuario_id'];
    $titulo = $_POST['titulo'];
    $id_categoria = intval($_POST['id_categoria']);
    $preco = floatval($_POST['preco']);
    $descricao = $_POST['descricao'];

    // Se id_anuncio for maior que 0, significa que estamos editando
    if ($id_anuncio > 0) {
        // --- LÓGICA DE ATUALIZAÇÃO (UPDATE) ---
        $sql = "UPDATE anuncios SET titulo = ?, id_categoria = ?, preco = ?, descricao = ? WHERE id = ? AND id_usuario = ?";
        $stmt = $conexao->prepare($sql);
        // Note a ordem dos parâmetros e os tipos (s, i, d, s, i, i)
        $stmt->bind_param("sidssi", $titulo, $id_categoria, $preco, $descricao, $id_anuncio, $id_usuario);
    } else {
        // --- LÓGICA DE CRIAÇÃO (INSERT) ---
        $sql = "INSERT INTO anuncios (id_usuario, id_categoria, titulo, preco, descricao) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        // Note a ordem dos parâmetros e os tipos (i, i, s, d, s)
        $stmt->bind_param("iisds", $id_usuario, $id_categoria, $titulo, $preco, $descricao);
    }

    // Executa a query preparada
    if ($stmt->execute()) {
        // Redireciona para a página de "Meus Anúncios" em caso de sucesso
        header("Location: meus_anuncios.php?sucesso=salvo");
    } else {
        // Em caso de erro, exibe a mensagem
        echo "Erro ao salvar o anúncio: " . $stmt->error;
    }

    $stmt->close();
    $conexao->close();
    exit();
} else {
    // Se alguém tentar acessar este arquivo diretamente, redireciona
    header("Location: meus_anuncios.php");
    exit();
}
?>

<?php 


?>
<h1>Meus Anuncios</h1>
<a href="novo_anuncio.php" class="btn-anunciar" style="display:inline-block; margin-bottom: 20px;">Criar Novo Anuncio </a>
<div class="anuncios-grid">
    <?php 
    $sql = "SELECT a.id, a.titulo, a.preco, c.nome AS categoria_nome
    FROM anuncios a 
    JOIN categorias c 
    ON a.id_categoria = c.id 
    WHERE a.id_usuario = ?
    ORDER BY a.data_puplicacao DESC"; 
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i",$usuraio_id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    if ($resultado->num_rows > 0) {
        while ($anuncio = $resultado->fetch_assoc()) {
            echo "<div class='anuncio-card manage'>";
            echo "<h3>" ,htmlspecialchars($anuncio['titulo'])."</h3>";
            echo "<p class='preco'>R$" . number_format($anuncio['preco'],2,',','.')."</p>";
            echo "<div class= 'actions'>";
            echo "<a href='novo_anuncio.php?id=" . $anuncio['id']. "class='edit'>Editar></a>";
            echo "<a href='novo_anuncio.php?id=" . $anuncio['id']. "'class='delete' onclick='return confim(\"Tem certeza\")'>Excluir</a>";
            echo "</div>";
            echo "</div>";

        }
    } else{
        echo"<p>Vacê ainda não tem nenhum anuncio. Que tal criar um? </p>";
       
    }
    $stmt->close();
    ?>
    </div>
    <?php include_once(__DIR__ . '/../footer.php');?>
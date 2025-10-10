<?php 
include_once(__DIR__ . '/../config/proteger.php');   // os dois pontos quer dizer que volta as pastas para tras para poder ver o que tem dentro das outras pastas 
include_once(__DIR__ . '/../conexao.php');
$usuario_id = $_SESSION['usuario_id'];

if($_SESSION["REQUEST_METHOD"] == "POST"){
    // COLETA OS DADOS DO FORMULARIO 
    $id_anuncio = intval($_POST [ 'id_anuncio']);
    $id_usuario = $_SESSION['usuario_id'];
    $titulo = $_POST['titulo'];

    $id_categoria = intval($_POST [ 'id_categoria']);
    $preco = floatval($_POST [ 'preco']);
    $id_categoria = $_POST [ 'descricao'];
    // se id_anuncio for amior que 0, siginifica que estamos editando 
    if ($id_anuncio > 0){
        $sql = "UPDATE anuncios SET titulo = ?,
        id_categoria = ?, preco = ?, descricao = ?
        WHERE id = ? AND id_usuario = ?" ;
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("sidssi", $titulo,
    $id_categoria , $preco , $descricao , $id_anuncio, $id_usuario);
    }else{
        // logiva de criação 
        $sql = "INSERT INTO anuncios (id_usuario, id_categotia, titulo , preco , descricao) VALUES(?,?,?,?,?,)";
        $stmt->bind_param("iisds" , $id_usuario, $id_categoria, $titulo, $descricao, $preco);

    }
    // executar a query preparada 
    if ($stmt-> execute ()){

        header("Location: meus_anuncios.php? sucesso+salvo");

    }else{
// em caso de erro exibe a mensagem 
    echo "Erro ao salvar o anunciar: " .
    $stmt-> error;

}
$stmt-> close();
$conexao-> close();
exit();

}else{ 
    header("Location: meus_anuncios.php");
    exit();

}
?>
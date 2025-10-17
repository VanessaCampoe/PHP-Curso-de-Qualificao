<?php 
session_start();

if (isset($_GET['acao']) && $_GET['acao']==='zerar'){
    unset($_SESSION['contador']);
    header("Location: contador_sessao.php");
    exit;
}

if(!isset($_SESSION['contador'])) {
    $_SESSION['contador']=1;
} else {
    $_SESSION['contador']++;
}
?>

<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Contador de Sessão</title>
</head>
<body>
<h1>Contador de Visitas (Sessão)</h1>
<p>Você já visitou esta página <strong><?= intval($_SESSION['contador']) ?></strong> vezes nesta
sessão.</p>
<p><a href="contador_sessao.php?acao=zerar">Zerar contador</a></p>
<hr>
<p>Feche o navegador e abra novamente para reiniciar o contador.</p>
</body>
</html>
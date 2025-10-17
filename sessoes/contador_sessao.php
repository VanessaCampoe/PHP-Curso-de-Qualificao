<?php 
session_start();
// Verifica se o usuário clicou em "Zerar contador"
if (isset($_GET['acao']) && $_GET['acao'] === 'zerar') {
    unset($_SESSION['contador']); // Destroi todos os dados da sessão o desyroi e para mais pag . nesse caso so isso mesmo  
    header("Location: contador_sessao.php"); // Redireciona para recarregar a página sem a query string
    exit;
}

// Se o contador não existir, inicia com 1
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    // Se já existir, incrementa
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
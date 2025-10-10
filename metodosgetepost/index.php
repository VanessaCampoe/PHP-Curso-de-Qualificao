<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Formulários com GET e POST</title>
</head>
<body>
<h1>Sistema de Visitantes</h1>
<h2>Pesquisa de Visitante (GET)</h2>
<form action="pesquisa.php" method="get">
<label>Nome:</label>
<input type="text" name="nome" required>
<button type="submit">Pesquisar</button>
</form>
<hr>
<h2>Cadastro de Visitante (POST)</h2>
<form action="cadastro.php" method="post">
<label>Nome:</label>
<input type="text" name="nome" required><br><br>
<label>E-mail:</label>
<input type="email" name="email" required><br><br>
<button type="submit">Cadastrar</button>
</form>
</body>
</html>                
<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Excluir Usuário</title>
    <style>
/* Fundo escuro*/
body {
background-color: #0f0f1a;
font-family: 'Courier New', Courier, monospace;
color: #00fff7;
margin: 20px;
}
/* Efeito neon para títulos */
h1, h2, h3 {
color: #ff00ff;
text-shadow:
        0
0 5px #ff00ff,
        0
0 10px #ff00ff,
        0
0 20px #ff00ff,
        0
0 40px #ff00ff;
}
/* Links neon com efeito hover */
a {
color: #00fff7;
text-decoration: none;
transition: all 0.3s ease;
text-shadow:
        0
0 5px #00fff7,
        0
0 10px #00fff7;
}
a:hover {
color: #ff4d4d;
text-shadow:
        0
0 5px #ff4d4d,
        0
0 10px #ff4d4d,
        0
0 20px #ff4d4d;
}
/* Estilo de formulário */
input[type="text"],
input[type="email"], input[type="submit"] {
padding: 8px 12px;
margin: 5px 0;
border: none;
border-radius: 5px;
background-color: #1a1a2e;
color: #00fff7;
box-shadow:
        0
0 5px #00fff7,
        0
0 10px #00fff7 inset;
font-size: 14px;
}
input[type="submit"] {
    cursor: pointer;
transition: all 0.3s ease;
}
input[type="submit"]:hover {
background-color: #ff00ff;
box-shadow:
        0
0 10px #ff00ff,
        0
0 20px #ff00ff inset;
color: #fff;
}
/* Tabela neon */
table {
width: 100%;
border-collapse: collapse;
margin-top: 20px;
color: #00fff7;
}
table th, table td {
border: 1px solid #00fff7;
padding: 10px;
text-align: left;
}
table th {
background-color: #1a1a2e;
text-shadow:
        0
0 5px #ff00ff,
        0
0 10px #ff00ff;
}
table tr:nth-child(even) {
background-color: #111125;
}
table tr:hover {
background-color: #222244;
box-shadow:
        0
0 10px #00fff7;
}
/* Separadores */
hr {
border: 1px solid #ff00ff;
margin: 20px 0;
box-shadow: 0 0 10px #ff00ff;
}
/* Parágrafos */
p {
line-height: 1.6;
}
/* Container para centralizar conteúdo */
.container {
max-width: 800px;
margin: auto;
}
</style>
</head>
<body>
    <h2>Excluir Usuário</h2>
    <p>Aqui colocaremos a lógica para excluir registros.</p>
    <p><a href="index.php">Voltar</a></p>
</body>
</html>
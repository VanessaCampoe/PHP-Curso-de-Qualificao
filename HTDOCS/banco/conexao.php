<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aula_php";

$conn = new mysqli($servername, $username, $password, $dbname, 3308);

if ($conn->connect_error){
    die("Falha na conexão:<br>" . $conn->connect_error);
}
echo "Conexão realizada com sucesso<br>";
?>
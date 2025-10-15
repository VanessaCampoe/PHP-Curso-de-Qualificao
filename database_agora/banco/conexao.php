<?php
$servername = "localhost";
$username = "root";
$passaword = "";
$dbname = "aula.php";

$conn = new mysqli($servername, $username , $passaword , $dbname ,3306);

if ($conn->connect_error){
    die("falha na conexao :" .$conn->connect_error);


}
    echo "Conexao reaizada com sucesso <br>";







?>
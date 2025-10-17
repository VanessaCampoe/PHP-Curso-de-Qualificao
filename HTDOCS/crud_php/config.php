<?php 
//Configurações do banco de dados
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','meu_banco_crud');

//Tentativa de conexão
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, 3308);

//Verificar a conexão
if($conn === false){
    die("ERRO: Não foi possivel conectar ao banco de dados".mysqli_connect_error());
}
?>
<?php 
// configuralão  do banco  de dados 
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','meu_banco_crud');


// tentativa da conexao 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME , 3306);
// verificqar a conexao 
if($conn === false){
    die ("ERRO  Não foi óssivel conectar ao banco de dados ".mysqli_connect_error());
}



?>
<?php 
// habilita de todos os erros para dpuração 
ini_set('display_erros',1);
error_reporting(E_ALL);
//  aqui vai me mostrar ond e esta os possiveis erros que eu estou comentendo , e depois  de pronto essa parte deve ser retirada do codigo 
//  se eu deiar isso aqui pode ser que mostre dados senssiveis do proprietario do sitema 

// inicia a sessao para todo o site 
session_start();



// confiuração  do banco de dados
$servidor = "localhost";
$usuaro_db = "root";
$senha_bd = "";
$banco = "classificado_bd";

// cria a conexao 

$conexao = mysqli_connect($servidor,$usuario_bd, $senha_bd, $banco);

// verifica conexao 
if (!$conexao) {
    die("Falha na conexão:mysqli_connect_erro"());


}
// define o charset para utf8 para evitar pbs 
mysqli_set_charset($conexao,"utf8");
// $
// $ 
// $
// $
// $ 




?>
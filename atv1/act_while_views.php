<?php 
// ===========================================================

/*While
$numero = 0;
while ($numero <= 50){
    echo"Visualização número ".$numero."<br>";
    $numero++;
}
echo "O vídeo bateu 50 views!";*/


// ===========================================================


//do-While
/*$i = 10;
do {
    echo "Execução nível: $i<br>";
    $i++;
} while ($i <= 5);*/

// ===========================================================


//for 
// for ($i = 1; $i <= 5; $i++)
//     echo "numero: $i<br>"  // no caso do for pode funcionar sem as chaves , mas nao e comum 


// ===========================================================


// for ($episodio = 1; $episodio <= 12; $episodio++){
    
//         if ($episodio % 2 == 0){
//             echo " Episodio $episodio - (Recomandado)<dr>";

//         } else { 
//             echo "Episódio $episodio<br>";

//         }
//     }
//     // aqui marcando os epsodios e sua porcentagem q fica em modulos 

// ===========================================================
//Foreach

$frutas = ["Maçã", "Laranja", "Uva"];
foreach ($frutas as $fruta){
    echo $fruta."<br>";
}





// ===========================================================
//
$aluno = ["nome" => "Maria", "idade" => 30, "Cidade" => "Taguatinga"];
foreach ($aluno as $chave => $valor){
    echo ucfirst($chave).":".$valor."<br>";
}
    // o arey e uma lista como exemplo 







// ===========================================================
//



// ===========================================================
//


?>
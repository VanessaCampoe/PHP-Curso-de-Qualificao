<?php 
/*While
$numero = 0;
while ($numero <= 50){
    echo"Visualização número ".$numero."<br>";
    $numero++;
}
echo "O vídeo bateu 50 views!";*/

//do-While
/*$i = 10;
do {
    echo "Execução nível: $i<br>";
    $i--;
} while ($i >= 0);*/



//For
/*for ($i = 1; $i <= 5; $i++){
    echo "Número: $i<br>"
}*/

/*for($episodio = 1; $episodio <= 12; $episodio++){
    if ($episodio % 2 == 0){
        echo "Episódio $episodio 
        - (Recomendado)<br>";
    } else {
        echo "Episódio $episodio<br>";
    }
}*/

//Foreach
/*$frutas = ["Maçã","Laranja","Uva"];
foreach ($frutas as $fruta){
    echo $fruta."<br>";
}

$aluno = ["nome" => "Maria", "idade" => 30, "Cidade" => "Taguatinga"];
foreach ($aluno as $chave => $valor){
    echo ucfirst($chave).": ".$valor."<br>";
}*/

//Atividade foreach
$jogos = [["nome" => "Zelda", "preco" => 250, "quantidade" => 1],
["nome" => "Minecraft", "preco" => 50, "quantidade"=> 2],
["nome" => "FIFA", "preco" => 300, "quantidade" => 1]];

$total = 0;

foreach ($jogos as $jogo){
    $subtotal = $jogo["preco"] * $jogo["quantidade"];
    echo $jogo["nome"]. " - Subtotal: R$".$total += $subtotal;
}
echo "<br>".$total;







?>

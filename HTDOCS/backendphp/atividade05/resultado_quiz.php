<?php 
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];

$pontos = 0;

if($q1 == "c") $pontos++;
if($q2 == "a") $pontos++;
if($q3 == "b") $pontos++;

echo "<h2>Resultado do Quiz</h2>";
echo "Você acertou $pontos de 3 perguntas<br><hr>";

if($pontos ==3){
    echo "Excelente desempenho 😊";
} else if ($pontos ==2){
    echo "Bom resultado 🙂";
} else if ($pontos ==1){
    echo "Precisa melhorar 😐";
} else {
    echo "Você precisa revisar o conteúdo 😕";
}
?>
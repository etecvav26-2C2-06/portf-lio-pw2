<!-- 
 Data: 17/03/2026
 Autor: Pedro Menezes Duque José
 Objetivo:
Exercício 7 - Separar Positivos e Negativos 
   Enunciado: Preencher um vetor com 8 números inteiros e separar em dois novos vetores.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php
// 1. Criamos o vetor principal vazio
$numeros = [];

// 2. Preenchemos com 8 números aleatórios entre -100 e 100
for ($i = 0; $i < 8; $i++) {
    $numeros[$i] = rand(-100, 100); 
}

$positivos = [];
$negativos = [];

$posp = 0; 
$posn = 0;

// 3. lógica de separação
for ($i = 0; $i < 8; $i++) {
    if ($numeros[$i] >= 0) {
        $positivos[$posp] = $numeros[$i];
        $posp++;
    } else {
        $negativos[$posn] = $numeros[$i];
        $posn++;
    }
}

// 4. Exibição limpa usando implode para mostrar apenas os números
echo "<b>Números Gerados Aleatoriamente:</b><br>";
echo implode(", ", $numeros);

echo "<br><br>";

echo "<b>Apenas os Positivos:</b><br>";
echo implode(" | ", $positivos);

echo "<br><br>";

echo "<b>Apenas os Negativos:</b><br>";
echo implode(" | ", $negativos);
?>
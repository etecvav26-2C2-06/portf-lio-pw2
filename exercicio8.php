<!-- 
 Data: 18/03/2026
 Autor: Pedro Menezes Duque José
Objetivo: 
Exercício 8 - Soma de 0 até N com Função
Faça um programa que receba um número inteiro, determinando a soma de 0 até tal número (incluso) por meio de uma função soma(n) que retorne tal soma.
*/

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

 
function soma ($n) {
    $total = 0;
    for ($i = 0; $i <= $n; $i++){
        $total = $total + $i;
}
return $total;
}
$numero_informado = 10;
$resultado = soma($numero_informado);

echo "Exercicio 8 - Soma de 0 até N <br>";
echo "N:".$numero_informado . "<br>";
echo "A soma total:".$resultado;






?>
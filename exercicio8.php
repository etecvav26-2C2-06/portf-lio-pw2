<!-- 
 Data: 18/03/2026
 Autor: Pedro Menezes Duque José
Objetivo: 
Exercício 8 - Soma de 0 até N com Função
Faça um programa que receba um número inteiro, determinando a soma de 0 até tal número (incluso) por meio de uma função soma(n) que retorne tal soma.
*/

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    
<?php

function soma ($n) {
    $total = 0; // 1. Variável que guarda o valor da soma
    for ($i = 0; $i <= $n; $i++){
        $total = $total + $i; // 2. Soma cada número ao total acumulado
    }
    return $total;
}

$numero_informado = 10;
$resultado = soma($numero_informado); // 3. Executa a função e guarda o resultado

echo "Exercicio 8 - Soma de 0 até N <br>";
echo "N: " . $numero_informado . "<br>";
echo "A soma total: " . $resultado;

?>
</body>
</html>
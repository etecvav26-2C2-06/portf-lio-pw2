<!-- 
 Data: 18/03/2026
 Autor: Nícolas de Oliveira
Objetivo: ler um número e mostrar os termos da sequencia de fibonacci
Exercício 6 - Série de Fibonacci
Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.

Exemplo:
n = 12
Resultado:
0 1 1 2 3 5 8 13 21 34 55 89
-->

<?php

$n = (int)readline("Quantos termos de Fibonacci você deseja ver? ");

$atual = 0;
$proximo = 1;
$resultado = [];

for ($i = 0; $i < $n; $i++) {
    //armazenamento dos termos
    $resultado[] = $atual;
    
//lógica da sequência:
    $soma = $atual + $proximo;
    $atual = $proximo;
    $proximo = $soma;
}

echo "Resultado: " . implode(" ", $resultado) . PHP_EOL;

?>

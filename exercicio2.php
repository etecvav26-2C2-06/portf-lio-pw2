<!--
Data: 18/03/2026
Autor: Felipe Abreu
Objetivo: Converter temperaturas entre Celsius e Fahrenheit

Exercício 2 - Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

Fórmula: C = 5/9 × (F − 32)
-->
<?php

// Pergunta a unidade e limpaa espaços extras
echo "C p/ Celsius ou F p/ Fahrenheit: ";
$unidade = trim(readline);
  echo "Qual o valor da temperatura? ";
  $valor = (float)readline();

// Converte de C para F
if (strtolower($unidade) == "c") {
    $f = ($valor * 1.8) + 32;
    echo "Fahrenheit: " . "°F\n"

} 
// Converte de F para C
else if (strtolower($unidade) == "f") {
    $c = ($valor - 32) / 1.8;
    echo "Celsius: " . $c . "°C\n"

} 
// Caso o usuário digite qualquer outra coisa
      } else {
    echo "Opção inválida.\n";


?>

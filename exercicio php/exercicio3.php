<!--
Data: 18/03/2026
Autor: Davi de Jesus
Objetivo: Criar uma calculadora aritmética que leia 2 numeros e um operador

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->
<?php

echo "digite o primeiro numero: ";
$n1 = fgets(STDIN);

echo "digite o operador (+, -, *, /): ";
$op = trim(fgets(STDIN)); 

echo "digite o segundo numero: ";
$n2 = fgets(STDIN);

// se o operador for +, somar
if ($op == "+") {
    $resultado = $n1 + $n2;
} 
// se o operador for -, subtrai
elseif ($op == "-") {
    $resultado = $n1 - $n2;
} 
// se o operador for *, multiplique
elseif ($op == "*") {
    $resultado = $n1 * $n2;
} 
// se o operador for /, divida
elseif ($op == "/") {
    $resultado = $n1 / $n2;
} 
// se nao for nenhum desses
else {
    $resultado = "operacao invalida";
}

echo "resultado e: " . $resultado;

?>

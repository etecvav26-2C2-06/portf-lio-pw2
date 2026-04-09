<!--
Data: 16/03/2026
Autor: Gabriel Macedo
Objetivo: Receber uma lista de numeros e retornar a média aritmética

Exercício 9 - Média Aritmética com Função
Crie uma função:

function media($v)
Que receba uma lista de números reais e retorne a média aritmética.
-->


<?php

/**
 * Função que recebe uma lista (array) e retorna a média
 */
function media($v) {
    // Soma todos os valores do array
    $soma = array_sum($v);
    
    // Conta quantos números existem na lista
    $quantidade = count($v);

    // Evita erro de divisão por zero caso o array esteja vazio
    if ($quantidade == 0) {
        return 0;
    }

    // Retorna o cálculo da média
    return $soma / $quantidade;
}

// --- teste (o que aparecerá no navegador) ---

$meusNumeros = [10, 5, 7, 8.5]; // Lista de números reais
$resultado = media($meusNumeros); // Chamada da função

echo "Os números são: " . implode(", ", $meusNumeros) . "<br>";
echo "A média aritmética é: " . $resultado;


//http://localhost:8000/exercicio9.php

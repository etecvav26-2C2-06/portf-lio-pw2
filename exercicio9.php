<?php

/**
 * Função que recebe uma lista (array) e retorna a média
 */
function media($v) {
    // Somamos todos os valores do array
    $soma = array_sum($v);
    
    // Contamos quantos números existem na lista
    $quantidade = count($v);

    // Evita erro de divisão por zero caso o array esteja vazio
    if ($quantidade == 0) {
        return 0;
    }

    // Retorna o cálculo da média
    return $soma / $quantidade;
}

// --- ÁREA DE TESTE (O que aparecerá no seu navegador) ---

$meusNumeros = [10, 5, 7, 8.5]; // Lista de números reais
$resultado = media($meusNumeros); // Chamada da função

echo "Os números são: " . implode(", ", $meusNumeros) . "<br>";
echo "A média aritmética é: " . $resultado;


//http://localhost:8000/exercicio9.php
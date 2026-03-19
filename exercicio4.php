<!--
Data: 18/03/2026
Autor: Davi de Jesus
Objetivo: Ler um número n e imprima n linhas 

Exercício 4 - Triângulo Numérico
Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6
-->
<?php

// lendo os dados do terminal
echo "digite o primeiro número: ";
$num1 = (float) fgets(STDIN);

echo "digite o operador (+, -, *, /): ";
$operador = trim(fgets(STDIN));

echo "digite o segundo número: ";
$num2 = (float) fgets(STDIN);

$resultado = 0;
$erro = false;

// processando a operação
switch ($operador) {
    case '+':
        $resultado = $num1 + $num2;
        break;
    case '-':
        $resultado = $num1 - $num2;
        break;
    case '*':
        $resultado = $num1 * $num2;
        break;
    case '/':
        //verificação para evitar erro de divisao
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            echo "erro: divisão por zero não é permitida.\n";
            $erro = true;
        }
        break;
    default:
        echo "operador inválido!\n";
        $erro = true;
}

// resultado
if (!$erro) {
    echo "---------------------------\n";
    echo "resultado: $num1 $operador $num2 = $resultado\n";
}

?>

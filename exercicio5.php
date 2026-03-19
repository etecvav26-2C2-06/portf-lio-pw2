<?php
$numeros = [];
$somatotal = 0;

echo "Digite 5 numeros inteiros:" . PHP_EOL; 

//estrutura de repetição para entrada dos valores no vetor
for ($i = 0; $i < 5, $i++) {
     $numeros [] = (int)readline("Numero " . ($i + 1) . ": ");
}

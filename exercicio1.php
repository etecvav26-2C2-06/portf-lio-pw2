<!--
Data: 18/03/2026
Autor: Felipe Abreu
Objetivo: Verificar se um numero digitado esta dentro de um intervalo especifico

Exercício 1 - Intervalo entre 100 e 200
Leia um número e diga se este número está no intervalo entre 100 e 200.
-->
<?php

// pede um numero para o usoário
echo "Digite um numero";
$num = readline();

// verificar se esta entre 100 e 200
if ($num >=100 && $num <=200) {
  
    // se estiver no intervalo
  echo "O número" . $num . "está entre 100 e 200\n";
  
} else {
  
    // se nao estiver no intervalo
  echo "O número" . $num . " não está entre 100 e 200\n";
}

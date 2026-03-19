<?php

$n = (int)readline("Quantos termos de Fibonacci você deseja ver? ");

$atual = 0;
$proximo = 1;
$resultado = [];

for ($i = 0; $i < $n; $i++) {
    //armazenamos o termo atual na nossa lista de resultados
    $resultado[] = $atual;

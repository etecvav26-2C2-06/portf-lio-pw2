<?php

 
function soma ($n) {
    $total = 0;
    for ($i = 0; $i <= $n; $i++){
        $total = $total + $i;
}
return $total;
}
$numero_informado = 10;
$resultado = soma($numero_informado);

echo "Exercicio 8 - Soma de 0 até N <br>";
echo "N:".$numero_informado . "<br>";
echo "A soma total:".$resultado;






?>
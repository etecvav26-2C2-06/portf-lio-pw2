<?php

function verificarBissexto($ano) {
    // Lógica: (Múltiplo de 400) OU (Múltiplo de 4 E NÃO múltiplo de 100)
    if (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)) {
        return "O ano $ano é bissexto.";
    } else {
        return "O ano $ano não é bissexto.";
    }
}

// Exemplos de teste:
echo verificarBissexto(2000) . "<br>"; // Múltiplo de 400
echo verificarBissexto(2024) . "<br>"; // Múltiplo de 4 e não de 100
echo verificarBissexto(2100) . "<br>"; // Múltiplo de 4, mas é múltiplo de 100 (Não é bissexto)

//http://localhost:8000/exercicio10.php
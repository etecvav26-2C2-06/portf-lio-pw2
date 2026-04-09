<!--
Data: 18/03/2026
Autor: Felipe Abreu
Objetivo: Converter temperaturas entre Celsius e Fahrenheit

Exercício 2 - Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

Fórmula: C = 5/9 × (F − 32)
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h2>Conversor de Temperatura</h2>
    
    <form method="POST">
        <input type="number" step="any" name="valor" placeholder="Temperatura" required>
        
        <select name="unidade">
            <option value="c">Celsius para Fahrenheit</option>
            <option value="f">Fahrenheit para Celsius</option>
        </select>
        
        <button type="submit">Converter</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = (float)$_POST['valor'];
        $unidade = strtolower($_POST['unidade']);
        $resultado = "";

        if ($unidade == "c") {
            // C para F: (C * 1.8) + 32
            $f = ($valor * 1.8) + 32;
            $resultado = "<strong>$valor °C</strong> equivale a <strong>$f °F</strong>";
        } 
        else if ($unidade == "f") {
            // F para C: (F - 32) / 1.8
            $c = ($valor - 32) / 1.8;
            $resultado = "<strong>$valor °F</strong> equivale a <strong>" . number_format($c, 2) . " °C</strong>";
        }

        echo "<h3>Resultado:</h3>" . $resultado;
    }
    ?>
</body>
</html>


<!--
Data: 09/04/2026
Autor: Felipe Abreu
Objetivo: Ler e separar numeros negativos e positivios

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores: Um vetor com números positivos e um vetor com números negativos.-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST;

    $positivos = "";
    $negativos = "";

    foreach ($numeros as $n) {
        if ($n >= 0) {
            $positivos .= $n . " ";
        } else {
            $negativos .= $n . " ";
        }
    }

    echo "Positivos: " . $positivos . "<br>";
    echo "Negativos: " . $negativos;
}
?>

<html>
<head>
    <title>Exercício 7</title>
</head>
<body>
    <form action="ex7.php" method="POST">
        <p>Digite 8 números:</p>
        <input type="number" name="n1" required><br>
        <input type="number" name="n2" required><br>
        <input type="number" name="n3" required><br>
        <input type="number" name="n4" required><br>
        <input type="number" name="n5" required><br>
        <input type="number" name="n6" required><br>
        <input type="number" name="n7" required><br>
        <input type="number" name="n8" required><br><br>
        <button type="submit">Separar</button>
    </form>
</body>
</html>

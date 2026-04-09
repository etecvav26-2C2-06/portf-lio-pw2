Data 18/03/2026.
Autor: Nícolas De Oliveira.
Objetivo: Exercício 05 - Leitura de 5 valores inteiros com fator.
Faça um progarama que Leia 5 números inteiros e mostre a soma dos fatoriais desses números.

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma de Vetores</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .campo { margin-bottom: 10px; }
        .resultado { margin-top: 20px; font-weight: bold; color: blue; }
    </style>
</head>
<body>

    <h2>Digite 5 números inteiros:</h2>
    
    <form method="POST">
        <?php for ($i = 0; $i < 5; $i++): ?>
            <div class="campo">
                <label>Número <?= $i + 1 ?>:</label>
                <input type="number" name="numeros[]" required 
                       value="<?= isset($_POST['numeros'][$i]) ? $_POST['numeros'][$i] : '' ?>">
            </div>
        <?php endfor; ?>
        
        <button type="submit">Calcular Soma</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = $_POST['numeros']; // Recebe o array do formulário
        $somaTotal = 0;

        // Estrutura de repetição para somar os valores
        foreach ($numeros as $num) {
            $somaTotal += (int)$num;
        }

        echo "<div class='resultado'>A soma total é: $somaTotal</div>";
        
        // Exibindo os números digitados (opcional)
        echo "<p>Números digitados: " . implode(", ", $numeros) . "</p>";
    }
    ?>

</body>
</html>

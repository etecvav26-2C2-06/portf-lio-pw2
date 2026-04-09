<?php
// Lógica de Processamento (Sempre no topo)
$resultado = "";
$exibirResultado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = (float)$_POST['n1'];
    $n2 = (float)$_POST['n2'];
    $op = $_POST['op'];
    $exibirResultado = true;

    switch ($op) {
        case "+": $resultado = $n1 + $n2; break;
        case "-": $resultado = $n1 - $n2; break;
        case "*": $resultado = $n1 * $n2; break;
        case "/": 
            $resultado = ($n2 == 0) ? "Erro: Divisão por zero!" : ($n1 / $n2); 
            break;
        default: $resultado = "Operação inválida";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <style>
        body { font-family: Arial; padding: 20px; line-height: 1.6; }
        .resultado { margin-top: 20px; padding: 10px; background: #f4f4f4; border-left: 5px solid #2ecc71; }
        input, select, button { padding: 10px; margin: 5px 0; }
    </style>
</head>
<body>

    <h2>Calculadora Aritmética</h2>
    
    <form method="POST">
        <input type="number" step="any" name="n1" placeholder="Número 1" required 
               value="<?= isset($_POST['n1']) ? $_POST['n1'] : '' ?>">
        
        <select name="op">
            <option value="+" <?= (isset($_POST['op']) && $_POST['op'] == '+') ? 'selected' : '' ?>>+</option>
            <option value="-" <?= (isset($_POST['op']) && $_POST['op'] == '-') ? 'selected' : '' ?>>-</option>
            <option value="*" <?= (isset($_POST['op']) && $_POST['op'] == '*') ? 'selected' : '' ?>>*</option>
            <option value="/" <?= (isset($_POST['op']) && $_POST['op'] == '/') ? 'selected' : '' ?>>/</option>
        </select>

        <input type="number" step="any" name="n2" placeholder="Número 2" required 
               value="<?= isset($_POST['n2']) ? $_POST['n2'] : '' ?>">
        
        <button type="submit">Calcular</button>
    </form>

    <?php if ($exibirResultado): ?>
        <div class="resultado">
            <strong>Resultado:</strong> <?= $resultado ?>
        </div>
    <?php endif; ?>

</body>
</html>

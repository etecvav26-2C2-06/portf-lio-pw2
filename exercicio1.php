Data: 18/03/2026
Autor: Felipe Abreu
Objetivo: Leia um numero e mostre se esta no intervalo de 100/200

<! html>
<html lang="pt-br">
<head>
    <title>Verificador de Intervalo</title>
</head>
<body>
    <h2>Verificar se o número está entre 100 e 200</h2>
    
    <!-- Formulário para o usuário digitar -->
    <form method="POST">
        <input type="number" name="valor" placeholder="Digite um número" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pega o valor do formulário via POST
        $num = $_POST['valor'];

        // Lógica de verificação
        if ($num >= 100 && $num <= 200) {
            echo "<p style='color: green;'>O número <strong>$num</strong> está entre 100 e 200.</p>";
        } else {
            echo "<p style='color: red;'>O número <strong>$num</strong> NÃO está entre 100 e 200.</p>";
        }
    }
    ?>
</body>
</html>

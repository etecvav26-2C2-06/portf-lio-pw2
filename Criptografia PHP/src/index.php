<?php
echo "<h2>Demonstração de Criptografia no PHP</h2><hr>";

// 1. Hashing de Senhas (Via de mão única)
$senha = "senha_aluno_123";
$hash_senha = password_hash($senha, PASSWORD_DEFAULT);

echo "<h3>1. Hashing Seguro (Para Senhas)</h3>";
echo "<strong>Senha Original:</strong> $senha <br>";
echo "<strong>Hash Gerado (Bcrypt):</strong> $hash_senha <br>";
echo "<strong>Validação:</strong> " . (password_verify($senha, $hash_senha) ? "Senha válida!" : "Inválida") . "<br>";

// 2. Criptografia Simétrica com OpenSSL (Via de mão dupla)
$dado_secreto = "Mensagem altamente confidencial.";
$metodo = "AES-256-CBC";
$chave = "chave_secreta_da_faculdade";
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($metodo)); // Vetor de inicialização

$encriptado = openssl_encrypt($dado_secreto, $metodo, $chave, 0, $iv);
$desencriptado = openssl_decrypt($encriptado, $metodo, $chave, 0, $iv);

echo "<h3>2. Criptografia Simétrica (OpenSSL AES-256)</h3>";
echo "<strong>Texto Original:</strong> $dado_secreto <br>";
echo "<strong>Texto Criptografado:</strong> $encriptado <br>";
echo "<strong>Texto Descriptografado:</strong> $desencriptado <br>";

// 3. Algoritmo de Hash Tradicional (SHA-256)
$texto_simples = "Documento de texto importante";
$sha256 = hash('sha256', $texto_simples);

echo "<h3>3. Hash Tradicional (SHA-256)</h3>";
echo "<strong>Hash gerado:</strong> $sha256 <br>";
?>
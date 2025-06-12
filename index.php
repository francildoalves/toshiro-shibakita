<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Exemplo PHP</title>
</head>
<body>

<?php
// Ativa exibição de erros (útil para desenvolvimento, desativar em produção)
ini_set("display_errors", 1);

// Define o tipo de conteúdo como HTML com charset ISO-8859-1
header('Content-Type: text/html; charset=iso-8859-1');

// Exibe a versão atual do PHP
echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

// Dados de conexão com o banco de dados (NÃO usar credenciais sensíveis em produção)
$servername = "54.234.153.24";
$username   = "root";
$password   = "Password@123";
$database   = "meubanco";

// Cria conexão com o banco de dados usando MySQLi
$link = new mysqli($servername, $username, $password, $database);

// Verifica se a conexão falhou
if (mysqli_connect_errno()) {
    // Exibe erro de conexão e encerra execução
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// Gera dados aleatórios para inserção
$valor_rand1 = rand(1, 999); // Número aleatório para AlunoID
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1)); // String aleatória para Nome, Sobrenome etc.
$host_name   = gethostname(); // Obtém nome do host atual

// Monta a query de inserção (atenção: vulnerável a SQL Injection)
$query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host)
          VALUES ('$valor_rand1', '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2', '$host_name')";

// Executa a query e verifica sucesso
if ($link->query($query) === TRUE) {
    echo "Novo registro inserido com sucesso";
} else {
    // Exibe mensagem de erro caso a query falhe
    echo "Erro: " . $link->error;
}

// Encerra a conexão (boa prática, mesmo que opcional)
$link->close();
?>

</body>
</html>

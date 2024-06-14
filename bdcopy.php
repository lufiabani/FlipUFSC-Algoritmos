<?php
// Configurações do banco de dados
$host = 'localhost';  // Endereço do servidor de banco de dados
$db   = '';  // Nome do banco de dados
$user = '';  // Nome de usuário do banco de dados
$pass = '';  // Senha do banco de dados
$charset = 'utf8mb4';  // Charset

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Opções PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Cria uma nova instância PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Em caso de erro, exibe a mensagem de erro
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


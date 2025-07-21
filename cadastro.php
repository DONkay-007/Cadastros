<?php

$db_file = __DIR__ . '/database.sqlite';

try {
    $pdo = new PDO('sqlite:' . $db_file);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "
    CREATE TABLE IF NOT EXISTS usuarios (
        id INTEGER INCREMENT PRIMARY KEY,
        nome TEXT NOT NULL,
        email TEXT NOT NULL UNIQUE,
        senha TEXT NOT NULL,
        data_cadastro TEXT DEFAULT CURRENT_TIMESTAMP
    )";

    $pdo->exec($sql);

    echo "Banco de dados e tabela 'usuarios' criados com sucesso!";

} catch (PDOException $e) {
    die("Erro ao criar o banco de dados: " . $e->getMessage());
}
?>
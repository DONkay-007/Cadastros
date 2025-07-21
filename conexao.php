<?php

$db_file = __DIR__ . '/database.sqlite';

try {
    $pdo = new PDO('sqlite:' . $db_file);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Falha na conexão com o banco de dados: " . $e->getMessage());
}
?>
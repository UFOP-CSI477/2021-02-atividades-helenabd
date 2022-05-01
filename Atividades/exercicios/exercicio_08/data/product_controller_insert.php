<?php

require 'connection.php';

$name = $_POST['name'];
$um = $_POST['um'];

if (empty($name) || empty($um)) {
    echo '<div><a href="state_view_insert.php">Voltar</a></div>';
    die("Preencha todos os campos!");
}

try {
    $connection->beginTransaction();

    $stmt = $connection->prepare("INSERT INTO produtos (nome, um) VALUES (:nome, :um)");

    $stmt->bindParam(':nome', $name);
    $stmt->bindParam(':um', $um);

    $stmt->execute();

    $connection->commit();

    header('Location: index.php');
    exit();
} catch (Exception $e) {
    $connection->rollBack();
    die("Erro ao inserir o produto: " . $e->getMessage());
}

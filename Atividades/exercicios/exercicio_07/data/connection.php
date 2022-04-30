<?php
// Conexão com o banco de dados
try {
    // Dados de acesso ao banco de dados
    $host = "localhost";
    $dbname = "aulas";
    $user = "root";
    $pass = "";

    // Cria a conexão
    $conection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

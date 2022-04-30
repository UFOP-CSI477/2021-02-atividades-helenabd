<?php
$nome = $_POST['name'];
$idade = $_POST['age'];
$telefone = $_POST['phone'];
$endereco = `{$_POST['adress_street']}, {$_POST['adress_number']}, {$_POST['adress_district']}, {$_POST['adress_city']}, {$_POST['adress_state']}, {$_POST['adress_country']}`;
$cpf = $_POST['documents_cpf'];

var_dump($nome);

<?php

require '../vendor/autoload.php';

use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Produto;
use App\Database\Connection;
use App\Database\AdapterSQLite;

$estado = new Estado(1, 'Minas Gerais', 'MG');

$connection = new Connection(new AdapterSQLite('../App/Database/estados.db'));
$connection->getAdapter()->connect();

$estados_list = $connection->getAdapter()->get()->query('SELECT * FROM estados');
$produtos_list = $connection->getAdapter()->get()->query('SELECT * FROM produtos');
$cidades_list = $connection->getAdapter()->get()->query('SELECT * FROM cidades');

$estados = [];
foreach ($estados_list as $estado) {
    $estados[] = new Estado($estado['id'], $estado['name'], $estado['sigla']);
}
$cidades = [];
foreach ($cidades_list as $cidade) {
    $cidades[] = new Cidade($cidade['id'], $cidade['nome'], $cidade['estado']);
}
$produtos = [];
foreach ($produtos_list as $produto) {
    $produtos[] = new Produto($produto['id'], $produto['nome'], $produto['um']);
}

require_once '../App/Views/cabecalho_view.php';
echo "<body>";
require_once '../App/Views/cidades_view.php';
require_once '../App/Views/estados_view.php';
require_once '../App/Views/produtos_view.php';
echo "</body>";
echo "</html>";

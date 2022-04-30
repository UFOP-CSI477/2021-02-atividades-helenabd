<?php
$nome = $_POST['name'];
$idade = $_POST['age'];
$telefone = $_POST['phone'];
$endereco = "{$_POST['adress_street']}, {$_POST['adress_number']}, {$_POST['adress_district']}, {$_POST['adress_city']}, {$_POST['adress_state']}, {$_POST['adress_country']}";
$cpf = $_POST['documents_cpf'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Pessoas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <h2>Lista de pessoas cadastradas</h2>

    <div class="table-responsive">

        <table class="table table-bordered table-hover table-striped">

            <thead>

                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>CPF</th>
                </tr>

            </thead>

            <tbody>

                <tr>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $idade ?></td>
                    <td><?php echo $telefone ?></td>
                    <td><?php echo $endereco ?></td>
                    <td><?php echo $cpf ?></td>
                </tr>
            </tbody>

        </table>
    </div>

    <!-- <a href="pessoas.html">Voltar</a> -->

</body>

</html>
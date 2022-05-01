<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <a href="product_view_insert.php">Inserir</a>

    <table class="table table-bordered table-hover table-striped">

        <thead>

            <tr class="table-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>UM</th>
            </tr>

        </thead>

        <tbody>

            <?php
            foreach ($products as $product) {
                echo "<tr>
                <td>{$product['id']}</td>
                <td>{$product['nome']}</td>
                <td>{$product['um']}</td>
                </tr>\n";
            }
            ?>


        </tbody>
    </table>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <form action="product_controller_insert.php" method="post" name="register">
        <h4>Informações do produto</h4>
        <div class="form-group p-2">
            <label for="product_name" class="p-2">Nome:</label>
            <input type="text" class="form-control" name="name" id="product_name">
        </div>

        <div class="form-group p-2">
            <label for="product_um" class="p-2">Unidade de Medida</label>
            <input type="text" class="form-control" name="um" id="product_um">
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-secondary">

        <input type="reset" value="Limpar" class="btn btn-danger">
    </form>

</body>

</html>
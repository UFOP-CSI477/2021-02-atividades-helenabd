<!-- php -S localhost:3000 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="../js/validacao-form.js"></script>

</head>

<body>
    <h2>Dados do cadastro</h2>

    <form action="/validar.php" method="post" name="register">

        <h4>Informações Pessoais</h4>
        <div class="form-group p-2">
            <label for="register_name" class="p-2">Nome:</label>
            <input type="text" class="form-control" name="name" id="register_name" placeholder="Informe o nome">
        </div>

        <div class="form-group p-2">
            <label for="register_age" class="p-2">Idade:</label>
            <input type="text" name="age" class="form-control" id="register_age" placeholder="Digite sua idade">
        </div>

        <div class="form-group p-2">
            <label for="register_phone" class="p-2">Telefone:</label>
            <input type="text" class="form-control" name="phone" id="register_phone" placeholder="Informe o telefone">
        </div>

        <h4>Endereço</h4>
        <div class="form-group p-2">
            <label for="register_adress_street" class="p-2">Rua:</label>
            <input type="text" class="form-control" name="adress_street" id="register_adress_street" placeholder="Informe sua rua">
        </div>
        <div class="form-group p-2">
            <label for="register_adress_number" class="p-2">Número/Complemento:</label>
            <input type="text" class="form-control" name="adress_number" id="register_adress_number" placeholder="Informe seu número">
        </div>
        <div class="form-group p-2">
            <label for="register_adress_district" class="p-2">Bairro:</label>
            <input type="text" class="form-control" name="adress_district" id="register_adress_district" placeholder="Informe seu bairro">
        </div>
        <div class="form-group p-2">
            <label for="register_adress_city" class="p-2">Cidade:</label>
            <input type="text" class="form-control" name="adress_city" id="register_adress_city" placeholder="Informe sua cidade">
        </div>
        <div class="form-group p-2">
            <label for="register_adress_state" class="p-2">Estado:</label>
            <input type="text" class="form-control" name="adress_state" id="register_adress_state" placeholder="Informe seu estado">
        </div>
        <div class="form-group p-2">
            <label for="register_adress_country" class="p-2">País:</label>
            <input type="text" class="form-control" name="adress_country" id="register_adress_country" placeholder="Informe seu país">
        </div>
        <div class="form-group p-2">
            <label for="register_adress_cep" class="p-2">CEP:</label>
            <input type="text" class="form-control" name="adress_cep" id="register_adress_cep" placeholder="Informe seu CEP">
        </div>

        <h4>Documentos</h4>
        <div class="form-group p-2">
            <label for="register_documents_cpf" class="p-2">CPF:</label>
            <input type="text" class="form-control" name="documents_cpf" id="register_documents_cpf">
        </div>
        <div class="form-group p-2">
            <label for="register_documents_RG" class="p-2">RG:</label>
            <input type="text" class="form-control" name="documents_RG" id="register_documents_RG">
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-secondary" onclick="processForm()">

        <input type="reset" value="Limpar" class="btn btn-danger">


    </form>

    <!-- <a href="pessoas.html">Voltar</a> -->

</body>

</html>
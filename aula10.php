<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Vida não é Fácil</title>
    <style>
        body{
            background-color: rgb(228, 228, 228);
            font-family: monospace;
            text-align: center;
        }
        .fontemaior{
            font-size: 35px;
        }
        .fontemaior2{
            font-size: 25px;
        }
        label, input{
    
            height: 30px;
            width: 1000px;
        }
        .forms{
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="fontemaior">Preencha os campos abaixo para inscrever-se no Concurso A Vida não é Fácil</h1>
    <h2 class="fontemaior2">Todos os campos são obrigatórios</h2>
    <div class="forms">
    <form action="recebe-aula10.php" method="post">
        <label for="nome_completo">Nome Completo: </label><br>
        <input type="text" id="nome_completo" name="nome_completo" required><br>

        <label for="data_nascimento">Data de Nascimento: </label><br>
        <input type="text" id="data_nascimento" name="data_nascimento" required><br>

        <label for="sexo">Sexo: </label><br>
        <input type="text" id="sexo" name="sexo" required><br>

        <label for="estado_civil">Estado Civil: </label><br>
        <input type="text" id="estado_civil" name="estado_civil" required><br>

        <label for="nacionalidade">Nacionalidade: </label><br>
        <input type="text" id="nacionalidade" name="nacionalidade" required><br>

        <label for="rg">RG: </label><br>
        <input type="text" id="rg" name="rg" required><br>

        <label for="cpf">CPF: </label><br>
        <input type="text" id="cpf" name="cpf" required><br>

        <label for="estado">Estado: </label><br>
        <input type="text" id="estado" name="estado" required><br>

        <label for="cidade">Cidade: </label><br>
        <input type="text" id="cidade" name="cidade" required><br>

        <label for="bairro">Bairro: </label><br>
        <input type="text" id="bairro" name="bairro" required><br>

        <label for="cep">CEP: </label><br>
        <input type="text" id="cep" name="cep" required><br>

        <label for="logradouro">Logradouro: </label><br>
        <input type="text" id="logradouro" name="logradouro" required><br>

        <label for="numero">Número: </label><br>
        <input type="text" id="numero" name="numero" required><br>

        <label for="complemento">Complemento: </label><br>
        <input type="text" id="complemento" name="complemento"><br>

        <label for="telefone">Número de Telefone: </label><br>
        <input type="text" id="telefone" name="telefone" required><br>

        <label for="email">Email para contato: </label><br>
        <input type="email" id="email" name="email" required><br>
        <br>
        <input type="submit" value="Enviar">
    </div>
    </form>
</body>
</html>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    <?php
// Recupera os dados do formulário usando o método POST
$nome_completo = htmlspecialchars($_POST['nome_completo']);
$data_nascimento = htmlspecialchars($_POST['data_nascimento']);
$sexo = htmlspecialchars($_POST['sexo']);
$estado_civil = htmlspecialchars($_POST['estado_civil']);
$nacionalidade = htmlspecialchars($_POST['nacionalidade']);
$rg = htmlspecialchars($_POST['rg']);
$cpf = htmlspecialchars($_POST['cpf']);
$estado = htmlspecialchars($_POST['estado']);
$cidade = htmlspecialchars($_POST['cidade']);
$bairro = htmlspecialchars($_POST['bairro']);
$cep = htmlspecialchars($_POST['cep']);
$logradouro = htmlspecialchars($_POST['logradouro']);
$numero = htmlspecialchars($_POST['numero']);
$complemento = htmlspecialchars($_POST['complemento']);
$telefone = htmlspecialchars($_POST['telefone']);
$email = htmlspecialchars($_POST['email']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Dados</title>
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
            font: 40px;  
        }
    </style>
</head>
<body>
    <h1 class="fontemaior">Confirme os dados informados</h1>
    <p><strong>Nome Completo:</strong> <?php echo $nome_completo; ?></p>
    <p><strong>Data de Nascimento:</strong> <?php echo $data_nascimento; ?></p>
    <p><strong>Sexo:</strong> <?php echo $sexo; ?></p>
    <p><strong>Estado Civil:</strong> <?php echo $estado_civil; ?></p>
    <p><strong>Nacionalidade:</strong> <?php echo $nacionalidade; ?></p>
    <p><strong>RG:</strong> <?php echo $rg; ?></p>
    <p><strong>CPF:</strong> <?php echo $cpf; ?></p>
    <p><strong>Estado:</strong> <?php echo $estado; ?></p>
    <p><strong>Cidade:</strong> <?php echo $cidade; ?></p>
    <p><strong>Bairro:</strong> <?php echo $bairro; ?></p>
    <p><strong>CEP:</strong> <?php echo $cep; ?></p>
    <p><strong>Logradouro:</strong> <?php echo $logradouro; ?></p>
    <p><strong>Número:</strong> <?php echo $numero; ?></p>
    <p><strong>Complemento:</strong> <?php echo $complemento; ?></p>
    <p><strong>Número de Telefone:</strong> <?php echo $telefone; ?></p>
    <p><strong>Email para contato:</strong> <?php echo $email; ?></p>
</body>
</html>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
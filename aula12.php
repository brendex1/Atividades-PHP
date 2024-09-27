<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rainha das Ondas</title>
    <link rel="stylesheet" href="Atividade11&12.css">
</head>
<body>
    <div class="quadrado">
        <?php
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];
            if ($nome=="Maria" && $senha=="12345"){
            echo "<h1>Autenticação realizada com sucesso</h1>";
            }
            else{
            echo "<h1>Você não tem permissão para visualizar essa página</h1>";
            }
        ?>
    </div>
</body>
</html>
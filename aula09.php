<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Comum</title>
</head>
<body>
    <form action="aula09-calcular.php" method="post">
        <label for="n1">Número 1: </label>
        <input type="text" name="n1"> <br>
        <label for="n2">Número 2: </label>
        <input type="text" name="n2"> <br>
        <input type="submit" value="Somar"> <br>
        Resultado: <input type="text" width="5" value="<?php echo (isset($_GET["res"])?$_GET["res"]:"");?>"> <br>
    </form>
</body>
</html>
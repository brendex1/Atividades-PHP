<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="Atividade11&12.css">

</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['peso']) && isset($_POST['altura'])) {
        $peso = (float)$_POST['peso'];
        $altura = (float)$_POST['altura'];
        
        if ($peso > 0 && $altura > 0) {
            // Calcula o IMC
            $imc = $peso / ($altura * $altura);
            
            if ($imc < 18.5) {
                $tabela = "Abaixo do Peso";
            } elseif ($imc < 24.9) {
                $tabela = "Peso Normal";
            } elseif ($imc < 29.9) {
                $tabela = "Sobrepeso";
            } elseif ($imc < 34.9) {
                $tabela = "Obesidade Grau Um";
            } elseif ($imc < 39.9) {
                $tabela = "Obesidade Grau Dois";
            } else {
                $tabela = "Obesidade Grau Três";
            }
            
            echo "<h1>Resultado do IMC</h1>";
            echo "<p>Seu IMC é " . number_format($imc, 2) . " e, de acordo com a tabela, seu peso está classificado como '{$tabela}'.</p>";
        } else {
            echo "<p>Por favor, insira valores positivos para peso e altura.</p>";
        }
    } else {
        echo "<p>Por favor, preencha todos os campos.</p>";
    }
} else {
    echo "<p>Não foi possível processar o formulário.</p>";
}
?>
</body>
</html>
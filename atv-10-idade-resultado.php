<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Idade</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Cálculo de Idade</h1>


    <?php

    $nome = $_REQUEST["nome"];

    $nascimento = $_REQUEST["nascimento"];

    $atual = date("Y");

    $idade = $atual - $nascimento;

    echo $nome . " a sua idade é " . $idade . " anos.";

    ?>

    <p>

        <input type="button" value="voltar" onclick="javascript:history.back();">

    </p>

</body>

</html>
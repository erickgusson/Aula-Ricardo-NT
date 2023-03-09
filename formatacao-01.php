<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Cálculo de Média</h1>

    <form action="" method="post">

        <p>Digite o nome do aluno:

            <input type="text" name="nome">

        </p>

        <p>Digite a primeira nota:

            <input type="text" name="nota1">

        <p>

        <p>Digite a segunda nota:

            <input type="text" name="nota2">

        <p>

        <p>

            <input type="submit" value="calcular">

        </p>

    </form>

    <?php

    if (isset($_REQUEST["nome"]) and isset($_REQUEST["nota1"]) and isset($_REQUEST["nota2"])) {


        $nome = $_REQUEST["nome"];

        $nota1 = $_REQUEST["nota1"];

        $nota2 = $_REQUEST["nota2"];

        $media = number_format((($nota1 + $nota2) / 2), 1);

        $mediaFormatada = str_replace(".", ",", $media);

        echo $nome . " a sua média final é " . $mediaFormatada;

    }

    ?>

    <p></p>

</body>

</html>
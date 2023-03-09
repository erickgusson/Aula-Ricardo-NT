<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Moeda</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Cálculo de Moeda</h1>

    <form action="" method="post">


        <p>Valor em Real:

            <input type="text" name="real">

        <p>

        <p>Euro custa:

            <input type="text" name="euro">

        <p>

        <p>Dolar custa:

            <input type="text" name="dolar">

        <p>

        <p>

            <input type="submit" value="calcular">

        </p>

    </form>

    <?php

    if (isset($_REQUEST["real"]) and isset($_REQUEST["euro"]) and isset($_REQUEST["dolar"])) {


        $real = $_REQUEST["real"];

        $euro = $_REQUEST["euro"];

        $dolar = $_REQUEST["dolar"];

        $realEuro = number_format(($real / $euro), 2);

        $realDolar = number_format(($real / $dolar), 2);

        $totalFormatada = str_replace(".", ",", $realEuro and $realDolar);

        echo "<p>O preço em Euro deu: R$" . $realEuro . "</p> <p>O preço em Dolar deu: R$" . $realDolar;

    }

    ?>

    <p></p>

</body>

</html>
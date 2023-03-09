<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Preço</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Cálculo de Preço</h1>

    <form action="" method="post">


        <p>Preço 1:

            <input type="text" name="preço1">

        <p>

        <p>Preço 2:

            <input type="text" name="preço2">

        <p>

        <p>

            <input type="submit" value="calcular">

        </p>

    </form>

    <?php

    if (isset($_REQUEST["preço1"]) and isset($_REQUEST["preço2"])) {


        $preco1 = $_REQUEST["preço1"];
        
        $preco2 = $_REQUEST["preço2"];

        $total = number_format(($preco1 + $preco2), 2);

        $totalFormatada = str_replace(".", ",", $total);

        echo "O preço total deu: R$" . $totalFormatada;

    }

    ?>

    <p></p>

</body>

</html>
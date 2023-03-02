<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Preço</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Cálculo de preço</h1>

    <form action="" method="post">

        <p>

            Digite o nome do produto:

                <input type="text" name="nome" required /> <br>

            Digite o preço do produto:

                <input type="number" name="preco" required /> <br>

            Digite a quantidade do produto:

                <input type="number" name="quantidade" required /> <br>

            Digite o desconto:

                <input type="number" name="desconto" required /> <br>


            <input value="calcular" type="submit" />

        </p>

    </form>

    <?php

    if (isset($_REQUEST["nome"]) and isset($_REQUEST["preco"]) and isset($_REQUEST["quantidade"]) and isset($_REQUEST["desconto"])) {

        $nome = $_REQUEST["nome"];

        $preco = $_REQUEST["preco"];

        $quantidade = $_REQUEST["quantidade"];

        $desconto = $_REQUEST["desconto"];

        $total = $preco * $quantidade;

        $resultado = ($quantidade * $preco) - $desconto;

        echo "<p> A quantidade do produto " . $nome . " ficou pelo total de " . $total . " menos o desconto de " . $desconto . " fica " . $resultado ." </p>";

    }

    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Média</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Cálculo de Média</h1>

    <form action="" method="post">

        <p>

            Digite o 1º número:

            <input type="number" name="n1" required /> <br>

            Digite o 2º número:

            <input type="number" name="n2" required /> <br>

            Digite o 3º número:

            <input type="number" name="n3" required /> <br>

            Digite o 4º número:

            <input type="number" name="n4" required />


        </p>

        <p>

            <input value="calcular" type="submit" />

        </p>

    </form>

    <?php

    if (isset($_REQUEST["n1"]) and isset($_REQUEST["n2"]) and isset($_REQUEST["n3"]) and isset($_REQUEST["n4"])) {

        $n1 = $_REQUEST["n1"];

        $n2 = $_REQUEST["n2"];

        $n3 = $_REQUEST["n3"];

        $n4 = $_REQUEST["n4"];

        $resultado = ($n1 + $n2 + $n3 + $n4) / 4;

        echo "<p> A média deu " . $resultado . " </p>";

    }

    ?>

</body>

</html>
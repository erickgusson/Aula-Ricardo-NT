<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raio</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Perimetro do Raio</h1>

    <form action="" method="post">


        <p>Raio:

            <input type="text" name="raio">

        <p>

        <p>

            <input type="submit" value="calcular">

        </p>

    </form>


    <?php

        if (isset($_REQUEST["raio"])) {

            $raio = $_REQUEST["raio"];

            $perimetroDoRaio = number_format((2 * pi() * $raio), 3);

            echo "Raio: " . $raio . "<br> Perimetro:" . $perimetroDoRaio;

        }

    ?>

    <p></p>

</body>

</html>
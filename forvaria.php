<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer for até</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <form action="" method="get">
        Fazer for até: <input type="number" name="number" /> <br />
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php

    if (isset($_GET["number"])) {

        $quantidadeFors = $_GET["number"];

        for ( $i = 1; $i <= $quantidadeFors; $i++ ) {

            if ( $i % 2 == 0) {

                echo 'O valor é ' . $i . ' par <br />' . PHP_EOL;

            }

            else {

                echo 'O valor é ' . $i . ' impar <br />' . PHP_EOL;

            }


        }

    }

    ?>

</body>

</html>
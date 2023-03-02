<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>if / elseif / else</h1>

    O valor é

    <?php

    $valor = 4;

    if ($valor == 1) {

        echo "um";

    } elseif ($valor == 2) {

        echo "dois";

    } elseif ($valor == 3) {

        echo "três";

    } else {

        echo "não sei!";

    }

    ?>

</body>

</html>
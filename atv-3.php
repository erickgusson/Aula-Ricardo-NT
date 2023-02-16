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

    <h1>switch / case</h1>

    O valor é

    <?php

    $valor = 1;

    switch ($valor) {

        case 1:

            echo "um";

            break;

        case 2:

            echo "dois";

            break;

        case 3:

            echo "três";

            break;

        default:

            echo "não sei!";

    }

    ?>

</body>

</html>
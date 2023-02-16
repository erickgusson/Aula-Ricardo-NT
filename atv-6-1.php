<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de controle</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>foreach</h1>

    Números pares até 10:

    <?php

    $n = array(2, 4, 6, 8, 10);

    foreach ($n as $i) {

        echo $i . ", ";

    }


    ?>

</body>

</html>
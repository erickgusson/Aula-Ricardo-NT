<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Lógico</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <form action="" method="get">
        Comparações lógicas no php: <input type="text" name="valor" /> <br />
        <input type="submit" name="submit" value="Comparar">
    </form>

    <?php

    if (isset($_GET["valor"])) {

        $valorATestar = $_GET["valor"];

        $compara2IguaisCom1 = ($valorATestar == 1);
        echo $valorATestar . ' comparando com 2 iguais o valor com o número 1 dá ' . $compara2IguaisCom1 . ', <br />' . PHP_EOL;

        $compara3IguaisCom1 = ($valorATestar === 1);
        echo $valorATestar . ' comparando com 3 iguais o valor com o número 1 dá ' . $compara3IguaisCom1 . ', <br />' . PHP_EOL;

        $compara2IguaisComFoo = ($valorATestar == "foo");
        echo $valorATestar . ' comparando com 2 iguais o valor com a string foo dá ' . $compara2IguaisComFoo . ', <br />' . PHP_EOL;

        $compara3IguaisComFoo = ($valorATestar === "foo");
        echo $valorATestar . ' comparando com 3 iguais o valor com a string foo dá ' . $compara3IguaisComFoo . ', <br />' .PHP_EOL;

    }

    ?>

</body>

</html>
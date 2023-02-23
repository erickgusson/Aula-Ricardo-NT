<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If aninhado</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <form action="" method="get">
        If aninhado valor1 para testar: <input type="number" name="number1" /> <br />
        If aninhado valor2 para testar: <input type="number" name="number2" /> <br />
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php

    if (isset($_GET["number1"]) and (isset($_GET["number2"]))) {

        $numero1 = $_GET["number1"];
        $numero2 = $_GET["number2"];

        if ($numero1 > 10) {

            if ($numero2 < 5) {

                echo 'Para cair aqui o valor1 é ' . $numero1 . ' (maior que 10) e o valor2 é ' . $numero2 . ' (menor que 5)';

            } else {

                echo 'Para cair aqui o valor1 é ' . $numero1 . ' (maior que 10) e o valor2 é ' . $numero2 . ' (maior ou igual a 5)';

            }

        } else

            if ($numero2 < 5) {

                echo 'Para cair aqui o valor 1é ' . $numero1 . ' (menor ou igual a 10) e o valor2 é ' . $numero2 . ' (menor que 5)';

            } else {

                echo 'Para cair aqui o valor 1é ' . $numero1 . ' (menor ou igual a 10) e o valor2 é ' . $numero2 . ' (maior ou igual 5)';

            }

    }

    ?>

</body>

</html>
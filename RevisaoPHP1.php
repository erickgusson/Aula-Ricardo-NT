<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão PHP</title>
    <style>
    </style>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Revisão PHP</h1>

    <form action="" method="post">

        <p>Digite o primeiro número:
            <input type="text" name="numero1">
        </p>

        <p>Digite o segundo número:
            <input type="text" name="numero2">
        </p>

        <p>Escolha a calcersão desejada: <br>
            <input type="radio" name="calculo" value="1" checked>Adição
            <input type="radio" name="calculo" value="2">Subtração
            <input type="radio" name="calculo" value="3">Divisão
            <input type="radio" name="calculo" value="4">Multiplicação
        </p>

        <p>
            <input type="submit" value="Calcular">
        </p>

    </form>

    <br><br><br>

    <?php

        function mais($n1, $n2) {
            return $n1 + $n2 ;
        }

        function menos($n1, $n2) {
            return $n1 - $n2;
        }

        function dividir($n1, $n2) {
            return $n1 / $n2;
        }

        function vezes($n1, $n2) {
            return $n1 * $n2;
        }

        if (
            isset($_REQUEST["numero1"])
            and
            isset($_REQUEST["numero2"])
            and
            isset($_REQUEST["calculo"])
        ) {

            $n1 = $_REQUEST["numero1"];
            $n2 = $_REQUEST["numero2"];
            $calc = $_REQUEST["calculo"];
            echo $n1 . "<br>";
            echo $n2 . "<br><br>";
            // echo $calc . "<br>";
            
            switch ($calc) {
                case 1:
                    $result = mais($n1, $n2);
                    break;
                case 2:
                    $result = menos($n1, $n2);
                    break;
                case 3:
                    $result = dividir($n1, $n2);
                    break;
                case 4:
                    $result = vezes($n1, $n2);
                    break;
            }

            echo $result;
        }


    ?>

</body>

</html>
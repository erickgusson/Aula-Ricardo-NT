<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual o maior?</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Qual o maior?</h1>

    <form action="" method="post">

        <p>

            Número 1:

                <input type="number" name="n1" required /> <br> <br>

            Número 2:

                <input type="number" name="n2" required /> <br> <br>

            Número 3:

                <input type="number" name="n3" required /> <br> <br>


            <input value="Calcular" type="submit" />

        </p>

    </form>

    <?php

    if (isset($_REQUEST["n1"]) and isset($_REQUEST["n2"]) and isset($_REQUEST["n3"]) ) {

        $n1 = $_REQUEST["n1"];

        $n2 = $_REQUEST["n2"];

        $n3 = $_REQUEST["n3"];

        if (($n1 > $n2) and ($n1 > $n3)) {

            echo "<p> O maior número é o número 1, valendo " . $n1 . "</p>";

        }

        elseif (($n2 > $n1) and ($n2 > $n3)) {

            echo "<p> O maior número é o número 2, valendo " . $n2 . "</p>";
        }

        elseif (($n3 > $n2) and ($n3 > $n1)) {

            echo "<p> O maior número é o número 3, valendo " . $n3 . "</p>";
        }

        else {

            echo "<p> Os números são iguais</p>";
            
        }

    }

    ?>

</body>

</html>
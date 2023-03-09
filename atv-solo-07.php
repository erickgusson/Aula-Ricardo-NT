<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Qual o maior?</h1>

    <form action="" method="post">

        <p>

            Número:

                <input type="number" name="numero" required /> <br> <br>


            <input value="Calcular" type="submit" />

        </p>

    </form>

    <?php

    if (isset($_REQUEST["numero"])) {

        $numero = $_REQUEST["numero"];

        $fatorial = 1;

        for ($i = 1; $i <= $numero; $i++) {

            $fatorial = $fatorial * $i;

            echo $i . "! = " . $fatorial . "<br>";

        }

    }

    ?>

</body>

</html>
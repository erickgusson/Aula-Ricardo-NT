<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lei de Ohm Resistênica</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Lei de Ohm Resistênica</h1>

    <form action="" method="post">

        <p>

            Voltagem (V):

                <input type="number" name="voltagem" required /> <br> <br>

            Intensidade (I):

                <input type="number" name="intensidade" required /> <br> <br>


            <input value="Calcular" type="submit" />

        </p>

    </form>

    <?php

    if (isset($_REQUEST["voltagem"]) and isset($_REQUEST["intensidade"]) ) {

        $voltagem = $_REQUEST["voltagem"];

        $intensidade = $_REQUEST["intensidade"];

        $resistencia = $voltagem / $intensidade;

        echo "<p> A resistênica é " . $resistencia . "</p>";

    }

    ?>

</body>

</html>
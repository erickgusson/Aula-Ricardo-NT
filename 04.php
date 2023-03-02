<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altura X Largura</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Altura X Largura</h1>

    <form action="" method="post">

        <p>

            Largura:

                <input type="number" name="largura" required /> <br> <br>

            Altura:

                <input type="number" name="altura" required /> <br> <br>


            <input value="Calcular" type="submit" />

        </p>

    </form>

    <?php

    if (isset($_REQUEST["largura"]) and isset($_REQUEST["altura"]) ) {

        $largura = $_REQUEST["largura"];

        $altura = $_REQUEST["altura"];

        $area = $largura * $altura;
        
        if ($largura < $altura) {

            echo $area . "<br> <img src='img/retangulo2.svg'>";

        }

        elseif ($largura > $altura) {

            echo $area . "<br> <img src='img/retangulo1.svg'>";

        }

        else {

            echo $area . "<br> <img src='img/quadrado.svg'>";

        }

    }

    ?>

</body>

</html>
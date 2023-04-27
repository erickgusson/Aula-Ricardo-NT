<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de IMC</title>
</head>

<body>

    <a href="/Aula-Novotec/index.html" style="color: lightblue;">← Voltar</a>

    <h1>Calculo de IMC</h1>

    <form action="" method="post">

        <p>

            Peso (KG): 

            <input type="text" name="peso" /> <br>

            Altura (M):

            <input type="text" name="altura" /> <br>

        </p>

        <p>

            <input value="calcular" type="submit" />

        </p>

    </form>

    <?php

    if (isset($_REQUEST["peso"]) and isset($_REQUEST["altura"])) {

        $peso = $_REQUEST["peso"];

        $altura = $_REQUEST["altura"];

        $resultado = number_format(($peso / ($altura * $altura)), 2);

        echo "<p> A média deu <strong style='color: lightblue';>" . $resultado . "</strong> </p><br>";

        if ($resultado < 18.5) {
            echo "<p>A sua média de: <strong style='color: lightblue';>" . $resultado . "</strong><br>Você está: <strong style='color: lightblue';> Abaixo do Peso</strong></p>";
        }

        elseif (($resultado >= 18.5) and ($resultado <= 24.9)) {
            echo "<p>A sua média de: <strong style='color: lightblue';>" . $resultado . "</strong><br>Você está: <strong style='color: lightblue';> Peso normal</strong></p>";
        }

        elseif (($resultado >= 25) and ($resultado <= 29.9)) {
            echo "<p>A sua média de: <strong style='color: lightblue';>" . $resultado . "</strong><br>Você está: <strong style='color: lightblue';> Levemente acima do peso</strong></p>";
        }

        elseif (($resultado >= 30) and ($resultado <= 34.9)) {
            echo "<p>A sua média de: <strong style='color: lightblue';>" . $resultado . "</strong><br>Você está: <strong style='color: lightblue';> Obesidade 1º Grau</strong></p>";
        }

        elseif (($resultado >= 35) and ($resultado <= 39.9)) {
            echo "<p>A sua média de: <strong style='color: lightblue';>" . $resultado . "</strong><br>Você está: <strong style='color: lightblue';> Obesidade 2º Grau (Severa)</strong></p>";
        }

        else{
            echo "<p>A sua média de: <strong style='color: lightblue';>" . $resultado . "</strong><br>Você está: <strong style='color: lightblue';> Obesidade 3º Grau (Mórbida)</strong></p>";
        }

    }

    ?>

</body>

</html>
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

        <p>Digite o terceiro número:
            <input type="text" name="numero3">
        </p>

        <p>
            <input type="submit" value="Calcular">
        </p>

    </form>

    <br><br><br>

    <?php

    if (
        isset($_REQUEST["numero1"])
        and
        isset($_REQUEST["numero2"])
        and
        isset($_REQUEST["numero3"])
    ) {

        $n1 = $_REQUEST["numero1"];
        $n2 = $_REQUEST["numero2"];
        $n3 = $_REQUEST["numero3"];
        echo $n1 . "<br>";
        echo $n2 . "<br>";
        echo $n3 . "<br><br>";

        $notas = array($n1, $n2, $n3);
        $mediaNotas = ($notas[0] + $notas[1] + $notas[2]) / 3;
        // echo $mediaNotas;
        if ($mediaNotas < 6) {
            echo "Sua nota é $mediaNotas<br> Você esta reprovado.";
        }else {
            echo "Sua nota é $mediaNotas<br> Você esta aprovado.";
        }
    }


    ?>

</body>

</html>
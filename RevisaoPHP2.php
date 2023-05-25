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
    ) {

        $n1 = $_REQUEST["numero1"];
        $n2 = $_REQUEST["numero2"];
        // echo $n1 . "<br>";
        // echo $n2 . "<br><br>";

        if ($n1 < $n2) {
            echo "$n2 > $n1";
        } 
        // elseif ($n1 == $n2) {
        //     echo "Os dois são iguais <br><br> Número A: $n1 <br> Número B: $n2";
        // } 
        else {
            echo "$n1 > $n2";
        }
    }


    ?>

</body>

</html>
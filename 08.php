<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste Salárial</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Reajuste Salárial</h1>

    <form action="" method="post">

        <p>

            Classe:

            <input type="text" name="classe" required /> <br> <br>

            salário:

            <input type="number" name="salario" required /> <br> <br>


            <input value="Calcular" type="submit" />

        </p>

    </form>

    <?php

    if (isset($_REQUEST["classe"]) and isset($_REQUEST["salario"])) {

        $classe = $_REQUEST["classe"];

        $salario = $_REQUEST["salario"];

        if (($classe == "a") or ($classe == "A") or ($classe == "c") or ($classe == "C")) {

            $reajuste = $salario * 1.10;
            echo "<p> Seu salário irá de " . $salario . " para " . $reajuste . "</p>";

        } elseif (($classe == "b") or ($classe == "B") or ($classe == "d") or ($classe == "D") or ($classe == "e") or ($classe == "E")) {

            $reajuste = $salario * 1.15;
            echo "<p> Seu salário irá de " . $salario . " para " . $reajuste . "</p>";

        } 
        elseif (($classe == "f") or ($classe == "F") or ($classe == "l") or ($classe == "L")) {

            $reajuste = $salario * 1.25;
            echo "<p> Seu salário irá de " . $salario . " para " . $reajuste . "</p>";

        } 
        elseif (($classe == "g") or ($classe == "G") or ($classe == "h") or ($classe == "H")) {

            $reajuste = $salario * 1.35;
            echo "<p> Seu salário irá de " . $salario . " para " . $reajuste . "</p>";

        } 
        
        else {

            $reajuste = $salario * 1.50;
            echo "<p> Seu salário irá de " . $salario . " para " . $reajuste . "</p>";

        }


    }

    ?>

</body>

</html>
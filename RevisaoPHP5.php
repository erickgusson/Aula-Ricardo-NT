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

        <p>Peso total dos peixes:
            <input type="text" name="peso">
        </p>

        <p>
            <input type="submit" value="Calcular">
        </p>

    </form>

    <br><br><br>

    <?php

    function multa($peso, $multa)
    {
        if ($peso < 50) {
            return false;
        }else {
            return $multa * ($peso - 50);
        }
    }

    if (
        isset($_REQUEST["peso"])
    ) {

        $peso = $_REQUEST["peso"];
        $multa = 4;
        echo "Peso: R$ $peso <br><BR>";
        $result = multa($peso, $multa);
        echo "Multa: R$ $result";
    }


    ?>

</body>

</html>
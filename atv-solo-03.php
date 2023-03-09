<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Dados</h1>

    <form action="" method="post">

        <p>

            Quantos dados:

                <input type="number" name="quantidade" required /> <br>


            <input value="Rodar" type="submit" />

        </p>

    </form>

    <?php

    if (isset($_REQUEST["quantidade"])) {

        $quantidade = $_REQUEST["quantidade"];

        
        for ($i = 1 ; $i <= $quantidade ; $i++) {
            
            $lado = rand (1, 6);
            echo "<img src='img/dado_" . $lado . ".png'>";
        }

    }

    ?>

</body>

</html>
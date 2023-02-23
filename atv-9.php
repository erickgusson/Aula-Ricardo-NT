<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo dos dados</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Jogo dos dados</h1>

    <?php

    $lado = rand (1, 6);

    echo "<img src='img/dado_" . $lado . ".png'>";

    ?>

</body>

</html>
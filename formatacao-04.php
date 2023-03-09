<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PI</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>PI</h1>

    <?php

        $piFormatado = number_format(pi(), 6);

        echo "<p>Valor de 6 casas do PI: " . $piFormatado . "<p/>";

    ?>

    <p></p>

</body>

</html>
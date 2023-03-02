<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia e Noite</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Dia e Noite</h1>

    <?php

    date_default_timezone_set(

        'America/Sao_Paulo'

    );

    $hoje = date("d/m/y");

    $agora = date("H:i");

    $hora = date("H");

    if ($hora < 6 or $hora > 18)

        echo "<img src='img/Lua.webp' height='50%' width='50%'>";

    else

        echo "<img src='img/Sol.jpg' height='50%' width='50%'>";

    echo "<br>Hoje é dia " . $hoje . "e agora são " . $agora . " horas.";

    ?>

</body>

</html>
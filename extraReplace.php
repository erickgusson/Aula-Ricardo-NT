<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <?php

    $frase = "Você comeria frutas, vegetais, e fibras todos os dias?";
    $saudavel = array("frutas", "vegetais", "fibras");
    $saboroso = array("pizza", "cerveja", "sorvete");

    $novaFrase = str_replace($saudavel, $saboroso, $frase);

    echo $novaFrase;

    ?>

    <p></p>

</body>

</html>
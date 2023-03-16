<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>individual vetor 02 </title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a><br>

    <?php

    $vetor = array();

    for ($i = 0; $i < 200; $i++) {

        $vetor[$i] = rand(1, 1000);

        if (($vetor[$i] % 2 == 0) and ($vetor[$i] % 3 == 0)) {

            echo $vetor[$i] . "<strong style='color: lightblue;'> Número foda</strong><br>";

        } elseif ($vetor[$i] % 2 == 0) {

            echo $vetor[$i] . "<span> Número divisivel por <strong style='color:lightblue'>2</strong></span><br>";

        } elseif ($vetor[$i] % 3 == 0) {

            echo $vetor[$i] . "<span> Número divisivel por <strong style='color:lightblue'>3</strong></span><br>";

        } else {

            echo $vetor[$i] . "<span> Número normal</span><br>";

        }

    }

    ?>

    <p></p>

</body>

</html>
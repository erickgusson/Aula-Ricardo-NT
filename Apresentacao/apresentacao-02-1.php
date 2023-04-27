<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Aninhado (Genética)</title>
</head>

<body>

    <a href="/Aula-Novotec/index.html" style="color: lightblue;">← Voltar</a>

    <h1>For Aninhado (Genética)</h1>

    <?php

        $vetor = array();
        $vetor[0][0] = "ㅤ";
        $vetor[0][1] = "<span style='border-bottom:1px solid black';> Xㅤ </span>";
        $vetor[0][2] = "<span style='border-bottom:1px solid black';>Y </span>";
        $vetor[1][0] = "<span style='border-right:1px solid black';>X </span>";
        $vetor[1][1] = " XX";
        $vetor[1][2] = " XY";
        $vetor[2][0] = "<span style='border-right:1px solid black';>Y </span>";
        $vetor[2][1] = " YX";
        $vetor[2][2] = " YY";
        
        for ($n1=0;$n1<=2;$n1++){

            for ($n2=0;$n2<=2;$n2++){

                echo $vetor[$n1][$n2];

            }

            echo "<br>";

        }
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Aninhado (Tabela de Multiplicação)</title>
</head>

<body>

    <a href="/Aula-Novotec/index.html" style="color: lightblue;">← Voltar</a>

    <h1>For Aninhado (Tabela de multiplicação)</h1>

    <?php

        $conta = 1;
        
        for ($n1=1;$n1<=10;$n1++) {
            for ($n2=1;$n2<=10;$n2++){
                $conta = $n1 * $n2;
                echo $n1 . " X " . $n2 . " = " . $conta . "<br>";
            }
            echo "<br>";
        }



    ?>

</body>

</html>
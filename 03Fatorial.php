<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>

<body>
    <h1>Fatorial com recursão</h1>
    <a href="/Aula-Novotec/index.html" style="color: lightblue;">← Voltar</a><br><br>
    <?php
    function fatorial($num)
    {
        if ($num == 0) {
            return 1;
        } else {
            return $num * fatorial($num - 1);
        }
    }

    //Exemplo
    $resultado = fatorial(5); //Resultado = 120
    echo $resultado . "<br><br><br>";

    //Desafio
    function arranjo($assentos, $pessoas) {
        return (fatorial($assentos))/(fatorial($assentos - $pessoas));
    }
    
    $assentos = 6;
    $pessoas = 4;
    $test = arranjo($assentos, $pessoas);
    echo $test;

    ?>

</body>

</html>
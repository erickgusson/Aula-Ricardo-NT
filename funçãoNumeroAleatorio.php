<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>

<body>
    <a href="/Aula-Novotec/index.html" style="color: lightblue;">← Voltar</a><br>
    <?php
    function gerarNumeroAleatorio($min, $max)
    {
        $numero = rand($min, $max);
        return $numero;
    }
    echo "<br>";
    $numero = gerarNumeroAleatorio(1, 100);
    echo "O número aleatório é: " . $numero . "<br>";
    //Desafio

    $numero = gerarNumeroAleatorio(-1000, 1000);
    echo "Desafio: <br>O número aleatório é: " . $numero . "<br>";

    ?>
</body>

</html>
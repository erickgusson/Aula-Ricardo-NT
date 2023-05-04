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
    function calcularMedia($numeros)
    {
        $soma = array_sum($numeros);
        $quantidade = count($numeros);
        $media = $soma / $quantidade;
        return $media;
    }

    $notas = array(8, 7, 9, 10, 6);
    $media = calcularMedia($notas);
    echo "A média é: " . $media;
    //Desafio 1

    $notas = array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10));
    $media = calcularMedia($notas);
    echo "<br><br>Desafio:<br>A média é: " . $media;
    
    ?>
</body>

</html>
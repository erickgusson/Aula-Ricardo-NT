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
    function converterParaMaiusculas($texto)
    {
        $textoMaiusculo = strtoupper($texto);
        return $textoMaiusculo;
    }
    echo "<br>";
    $texto = "isso é um exemplo de texto.";
    $textoMaiusculo = converterParaMaiusculas($texto);
    echo $textoMaiusculo;
    //Desafio
    function converterParaMinusculas($texto)
    {
        $textoMinusculo = strtolower($texto);
        return $textoMinusculo;
    }
    echo "<br>";
    $texto = "ISSO É UM EXEMPLO DE TEXTO.";
    $textoMinusculo = converterParaMinusculas($texto);
    echo $textoMinusculo;
    ?>
</body>

</html>
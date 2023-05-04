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
    function validarEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
    //Desafio
    
    $emailTrue = "True@gmail.com";
    $emailFalse = "False";

    if (validarEmail($emailTrue)) {
        echo "Tudo certo pode continuar <br>";
    } else {
        echo "Paro, paro, paro <br>";
    }

    if (validarEmail($emailFalse)) {
        echo "Tudo certo pode continuar <br>";
    } else {
        echo "Paro, paro, paro <br>";
    }

    ?>
</body>

</html>
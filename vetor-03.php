<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor 03</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>




    <?php

        $produto = array();
        $produto["codigo"]=11;
        $produto["descricao"]="Televisor";
        $produto["preco"]=1990;

        echo "<br> codigo: " . $produto["codigo"] . "<br> Descição: " . $produto["descricao"] . "<br> Preço: " . $produto["preco"] ;

    ?>

    <p></p>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Idade Assunto Formulários</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Cálculo de Idade</h1>

    <form action="atv-11.php" method="post">

        <p>Digite o nome:

            <input type="text" name="nome" required />

        </p>

        <p>Digite o ano de nascimento:

            <input type="text" name="nascimento" required pattern="\d{4}" />

        </p>

        <p>

            <input value="calcular" type="submit" />

        </p>

    </form>

    <?php

    if (isset($_REQUEST["nome"]) and isset($_REQUEST["nascimento"])) {

        $nome = $_REQUEST["nome"];

        $nascimento = $_REQUEST["nascimento"];

        $atual = date("Y");

        $idade = $atual - $nascimento;

        echo "<p>" . $nome . " a sua idade é " . $idade . " anos.</p>";

    }

    ?>

</body>

</html>
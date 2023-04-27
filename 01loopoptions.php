<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Options</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Loop Options Pizzaria</h1>
    <h2>Monte sua pizza</h2>

    <form action="01pizzariaresultado.php" method="post">

        <p>

            Ingredientes:

        </p>

        <?php

        for ($i = 1; $i <= 5; $i++) {
            ?>
            <p>
                <?php echo $i . ". "; ?>
                <select name="ingrediente<?php echo $i; ?>">
                    <option value="0">(nenhum></option>
                    <option value="1">Mussarela</option>
                    <option value="2">Calabresa</option>
                    <option value="3">Catupiry</option>
                    <option value="4">Aliche</option>
                    <option value="5">Frango</option>
                    <option value="6">Milho</option>
                    <option value="7">Atum</option>
                    <option value="8">Tomate</option>
                    <option value="9">Presento</option>
                </select>
            </p>
            <?php
        }
        ?>

        <p>

            <input value="calcular" type="submit" />

        </p>

    </form>


</body>

</html>
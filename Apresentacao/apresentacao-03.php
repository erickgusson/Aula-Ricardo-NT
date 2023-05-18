<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regra de 3 (Erick)</title>
    <style>
        body {
            padding: 1rem;
        }

        form {
            width: 500px;
            display: flex;
            justify-content: space-around;
        }

        input {
            text-align: center;
        }

        hr {
            width: inherit;
        }
    </style>
</head>

<body>

    <a href="/Aula-Novotec/index.html" style="color: lightblue;">← Voltar</a>

    <h1>Regra de 3</h1>

    <form action="apresentacao-03.php" method="post">

        <div>
            <input type="text" name="n1" placeholder="Número 1">
            <hr>
            <input type="text" name="n2" placeholder="Número 2">
        </div>
        <div>
            <input type="text" name="n3" placeholder="Número 3">
            <hr>
            <input type="text" disabled placeholder="X">
        </div>

        <p>

            <input value="Calcular" type="submit" />

        </p>

    </form>

    <br><br><br>

    <?php

    if (isset($_REQUEST["n1"]) and isset($_REQUEST["n1"]) and isset($_REQUEST["n1"])) {

        $n1 = $_REQUEST["n1"];
        $n2 = $_REQUEST["n2"];
        $n3 = $_REQUEST["n3"];

        function regraDeTres($valor1, $valor2, $valor3)
        {
            if ($valor1 == 0 or $valor2 == 0 or $valor3 == 0) {
                return "Impossível calcular. Um dos valores é zero.";
            }

            $resultado = ($valor2 * $valor3) / $valor1;

            return $resultado;
        }
    }

        // Exemplo de uso
        $valor1 = $n1;
        $valor2 = $n2;
        $valor3 = $n3;

        $resultado = regraDeTres($valor1, $valor2, $valor3);
        echo "O valor desconhecido é: " . $resultado;
    ?>

</body>

</html>
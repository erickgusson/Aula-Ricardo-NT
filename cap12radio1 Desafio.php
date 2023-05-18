<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de temperatura</title>
    <style>
    </style>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a>

    <h1>Conversão de temperatura</h1>

    <form action="cap12radio1 Desafio.php" method="post">

        <p>Digite a temperatura:
            <input type="text" name="temperatura">
        </p>

        <p>Escolha a conversão desejada: <br>
            <input type="radio" name="conversao" value="1" checked>Celsius → Fahrenheit<br>
            <input type="radio" name="conversao" value="2">Fahrenheit → Celsius<br>
            <input type="radio" name="conversao" value="3">Celsius → Kelvin<br>
            <input type="radio" name="conversao" value="4">Kelvin → Celsius<br>
            <input type="radio" name="conversao" value="5">Fahrenheit → Kelvin<br>
            <input type="radio" name="conversao" value="6">Kelvin → Fahrenheit<br>
        </p>

        <p>
            <input type="submit" value="Calcular">
        </p>

    </form>

    <br><br><br>

    <?php

        function celsiusParaFahrenheit($temp) {
            return $temp * 1.8 + 32;
        }

        function fahrenheitParaCelsius($temp) {
            return ($temp - 32) / 1.8;
        }

        function celsiusParaKelvin($temp) {
            return $temp + 273.15;
        }

        function kelvinParaCelsius($temp) {
            return $temp - 273.15;
        }
        function fahrenheitParaKelvin($temp) {
            return ($temp - 32) * 1.8 + 273.15;
        }
        function kelvinParaFahrenheit($temp) {
            return ($temp -273.15) * 1.8 + 32;
        }

        if (
            isset($_REQUEST["temperatura"])
            and
            isset($_REQUEST["conversao"])
        ) {

            $temp = $_REQUEST["temperatura"];
            $conv = $_REQUEST["conversao"];
            echo $temp . "<br>";
            echo $conv . "<br>";
            
            switch ($conv) {
                case 1:
                    $result = celsiusParaFahrenheit($temp);
                    break;
                case 2:
                    $result = fahrenheitParaCelsius($temp);
                    break;
                case 3:
                    $result = celsiusParaKelvin($temp);
                    break;
                case 4:
                    $result = kelvinParaCelsius($temp);
                    break;
                case 5:
                    $result = fahrenheitParaKelvin($temp);
                    break;
                case 6:
                    $result = kelvinParaFahrenheit($temp);
                    break;
            }

            echo $result;
        }


    ?>

</body>

</html>
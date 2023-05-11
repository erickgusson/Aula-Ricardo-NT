<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtra Vetores</title>
</head>
<body>
    <h1>Remove ímpares do vetor</h1>
    <a href="/Aula-Novotec/index.html" style="color: lightblue;">← Voltar</a><br><br>
    <?php 
        function numeros_Pares($numeros) {
            $pares = array();
            foreach ($numeros as $numero) {
                if ($numero % 2 == 0) {
                    $pares[] = $numero;
                }
            }
            return $pares;
        }

        //Exemplo de uso
        $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14);
        $pares = numeros_Pares($numeros);
        foreach ($pares as $valores) {
            echo $valores . " ,";
        }

        echo "<br><br><br>";

        function numeros_Impares($numeros) {
            $impares = array();
            foreach ($numeros as $numero) {
                if ($numero % 2 !== 0) {
                    $impares[] = $numero;
                }
            }
            return $impares;
        }

        //Exemplo de uso
        $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14);
        $impares = numeros_Impares($numeros);
        foreach ($impares as $valores) {
            echo $valores . ", ";
        }
    ?>
</body>
</html>
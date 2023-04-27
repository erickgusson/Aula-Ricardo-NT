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
        function elevarNumero(float $n, float $potencia=2) {
            echo $n ** $potencia . "<br>";
        }
        elevarNumero(2, 3);
        elevarNumero(3);
        elevarNumero(2);
        elevarNumero(2.1, 3.3);

    ?>
</body>
</html>
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
        function dobrarValor(&$valor) {
            $valor = $valor * 2;
        }

        $num = 5;
        dobrarValor($num);
        echo $num;
    ?>
</body>
</html>
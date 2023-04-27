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
        function mostrarNome($nome) {
            echo "<h1> Olá " . $nome . "!</h1>";
        }
        $fulano = "Fulano";
        mostrarNome($fulano);
        //Desafio
        $colega = "Kaiki";
        mostrarNome($colega);
    ?>
</body>
</html>
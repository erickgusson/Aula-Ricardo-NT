<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor 06</title>
</head>

<body>

    <a href="index.html" style="color: lightblue;">← Voltar</a><br>

    <?php

        $vetor = array();

        for ($i = 0; $i < 200; $i++){
            
             $vetor[$i] = rand(1, 1000); 
             echo $vetor[$i] . "<br>";
            
        }
        
        echo "<br><p> O maior valor do vetor foi: " . max($vetor) . "</p>";

        ?>

    <p></p>

</body>

</html>
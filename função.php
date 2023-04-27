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
        function olaMundo(){
            echo "Olá mundo!" . "<br>";
        }
        olaMundo();
        echo "<br>";

    //Desafio 1
        for ($i=1;$i<=5;$i++){
            olaMundo();
            sleep(1);
        }

        echo "<br>";
    //Desafio 2
        function olaMundo2(){
            echo "Olá mundo 2 ";
            olaMundo3();
        }
        function olaMundo3(){
            echo "olá mundo 3";
        }
        olaMundo2();
    ?>
</body>
</html>
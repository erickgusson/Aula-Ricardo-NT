<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Testa se é primo com return e echo</h1>
    <a href="/Aula-Novotec/index.html" style="color: lightblue;">← Voltar</a><br>
    <?php 
        
        function e_Primo($num) {
            if ($num < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        function avisa_Se_E_Primo($numero) {
            if (e_Primo($numero)) {
                echo "$numero é Primo";
            }
            else {
                echo "$numero não é Primo";
            }
        }

        //Exemplo
        $numero = 17;
    ?>
</body>
</html>
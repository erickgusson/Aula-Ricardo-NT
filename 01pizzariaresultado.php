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

    <h1>Pizzaria Resultado</h1>

    <?php
    $nome = array(
        "nenhum",
        "Mussarela",
        "Calabresa",
        "Catupiry",
        "Aliche",
        "Frango",
        "Milho",
        "Atum",
        "Tomate",
        "Presunto"
    );
    $preco = array(
        0.00,
        9.00,
        5.50,
        6.50,
        8.00,
        6.00,
        4.50,
        7.00,
        5.00,
        8.00
    );

    $total = 0;
    $reposta = "A sua pizza de ";
    for ($i=1;$i<=5;$i++){
        $ingrediente = 
        $_REQUEST["ingrediente".$i];
        if ($ingrediente>0){
            $total = $total + $preco[$ingrediente];
            $reposta .= $nome[$ingrediente].", ";
        }
    }

    $reposta .= " irá custar R$ ";
    echo $reposta . number_format($total,2);

        ?>
        <p>
            <input type="button" value="voltar" onclick="javascript:history.back();">
        </p>

</body>

</html>
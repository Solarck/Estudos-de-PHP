<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleitor</title>
    <style>
        *{
        margin: 5px;
        padding: 0;
    }

    body{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 25px;
        flex-direction: column;
        text-align: center;
    }
    </style>
</head>
<body>
           <!-- Àrea de variaveis -->
    <?php
    $idade = 18;
    $titulo_eleitor = false;

    if($titulo_eleitor == true && $idade >=18){
    }
    ?>
        <!-- Detalhes da compra -->
    <h1>Status do Eleitor</h1>
    <p>Posui Titulo de Eleitor?
        <?php
        if($titulo_eleitor==true){
            echo 'SIM';
        }
        else{
            echo 'NÃO';
        }
        ?>
    </p>

    <P>Idade: <?=$idade?></P>

        <!-- Desconto no frete -->
    <p>Pode votar?
        <?php
        if($idade >=18 && $titulo_eleitor == true){
            echo 'SIM';
        }
        else{
            echo 'NÃO';
        }
        ?>
    </p>

    
</body>
</html>
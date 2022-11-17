<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detalhes do pedido</title>
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
    $usuario_possui_cartao_loja = true;
    $valor_compra = 1000;
    $desconto_frete = 0;
    $recebeu_desconto_frete = false;

    if($usuario_possui_cartao_loja == true && $valor_compra >=100){
        $desconto_frete = 10;
        $recebeu_desconto_frete = true;
    }
    if($usuario_possui_cartao_loja == true && $valor_compra >=500){
        $desconto_frete = 50;
        $recebeu_desconto_frete = true;
    }
    ?>
        <!-- Detalhes da compra -->
    <h1>Detalhes do pedido</h1>
    <p>Posui cartão da loja?
        <?php
        if($usuario_possui_cartao_loja==true){
            echo 'SIM';
        }
        else{
            echo 'NÃO';
        }
        ?>
    </p>

    <P>Valor da compra:<?=$valor_compra?></P>

        <!-- Desconto no frete -->
    <p>Recebeu desconto no frete?
        <?php
        if($recebeu_desconto_frete == true){
            echo 'SIM';
        }
        else{
            echo 'NÃO';
        }
        ?>
    </p>

    <p>Desconto no frete:<?=$desconto_frete?></p>

    
</body>
</html>
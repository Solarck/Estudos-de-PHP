<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imc</title>
    <style>
        body{
            display: flex;
            justify-content: center;  
            font-size: 35px;
        }
    </style>
</head>
<body>
    <?php

    // Variaveis e formatação
    $altura = 1.59;
    $peso = 59;
    $imc = $peso / $altura **2;
    $format_num = number_format($imc,2);

    echo 'Seu IMC: '.$format_num;

    // Estrutura condicional

    if($imc < 17 ){
        echo ' Muito Abaixo do peso';
    }

    else if($imc <= 18.5){
        echo ' Abaixo do peso';
    }

    else if($imc <= 24.9){
        echo ' Normal';
    }

    else if($imc <= 29.9){
        echo ' Sobrepeso';
    }

    else if($imc <= 34.9){
        echo ' Obesidade I';
    }

    else if($imc <= 39.9){
        echo ' Obesidade II';
    }

    else{
        echo ' Obesidade III';
    }

    ?>
</body>
</html>
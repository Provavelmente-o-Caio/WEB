<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        # variáveis
        $var_valor = 1;
        $var_nome = 'Caio';
        $var_teste = false;

        # mudar valor
        $var_valor = 'um';

        echo '<h1>'.$var_valor.'</h1>';

        echo 'Meu nome é '.$var_nome;

        # Aspas duplas são mais simples de usar, porém mais lentas de carregar:
        echo "<p>Meu nome é $var_nome</p>";

        #Símbolos matemáticos
        $soma = 1+1;
        $multiplicação = 2*2;
        $divisao = 4/2;
        $subtracao = 6-3;

        #condições
        $a = 2;
        $b = 3;

        if($a>$b){
            echo $a;
        }
        elseif($a==$b){
            echo "São iguais";
        }
        else{
            echo $b;
        }
    ?>
</body>
</html>
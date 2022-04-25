<?php
    $arr1 = ['Garopaba', 'Imbituba', 'Paulo Lopes'];

    //add ao array
    $arr1[] = 'Imaruí';

    //tamanho
    echo 'Meu array possui '.count($arr1).' elementos';

    // repetição
    for($i=0; $i<count($arr1); $i++){
        echo '<p>';
        echo $arr1[$i];
        echo '</p>';
    }

    // while
    echo '<hr>';
    $i = 0;
    while ($i < count($arr1)){
        echo '<p>';
        echo $arr1[$i];
        echo '</p>';
        $i++;
    }

    //foreach
    echo '<hr>';
    foreach($arr1 as $e){
        echo "<p>$e</p>";
    }

    //arrays associativos
    echo '<hr>';
    echo '<h1>Arrays Associativos</h1>';
    $arr2 = ['uf'=>'Santa Catarina', 'cidade'=>'Garopaba', 'cep'=>'88495-000'];
    $curitiba = ['uf'=>'Paraná', 'cidade'=>'Curitiba', 'cep'=>'99999-999'];

    //Arrays múltiplo (matriz)
    $cidades = [$arr2, $curitiba];
    echo $cidades[1]['cidade'];
    echo '<hr>';
    foreach($cidades as $cidade){
        foreach($cidade as $chave => $elemento){
            echo "<p>$chave: $elemento</p>";
        }
    }
?>
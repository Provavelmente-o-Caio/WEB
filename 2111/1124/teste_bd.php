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
    try{
        #tenta identificar erro
        $user = 'root';
        $senha = '';
        $dbname = '';
        $conexao = new PDO('mysql:host=localhost; dbname='.$dbname, $user, $senha);

        #select com PDO
        $x = $conexao->query('SELECT x, y, z FROM a ORDER BY i');

        foreach ($x as $f) {
            echo '<p>';
            echo $f[y];
            echo '</p>'
        }

    }
    catch(\PDOException $e){
        #trater do erro
        #echo $e->get_Message();
        echo "<p>Comportamento inesperado!</p>";
    }
    ?>
</body>
</html>
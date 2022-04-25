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
        $x = 1;
        while ($x <= 10) {
            echo "<p>$x</p>";
            $x++;
        }

        for ($i=1; $i<=10; $i++){
            echo "<p> a variável i vale $i</p>";
        }

        #arrays
        $a = [1, 2, 4, 8, 16, 32, 64, 128, 252, 512, 1024, 2048];
        echo "<p>$a[1]</p>";
        echo "<p>$a[5]</p>";

        #adicionar valor arrays
        $a[] = 4096;
        echo "<p>$a[12]</p>";
    ?>
</body>
</html>
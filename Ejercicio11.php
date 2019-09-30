<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 11</title>
</head>
<body>
    <?php
        $numbers = [[], []];
        for($i = 0; $i < 100; $i++){
            $random = rand(0, 100);
            if ($random % 2 == 0){
                array_push($numbers[0], $random);
            }else {
                array_push($numbers[1], $random);
            }
        }

        echo '<h4>NÚMEROS PARES</h4>';
        for ($i = 0; $i < count($numbers[0]); $i++){
            echo '<p>'.$numbers[0][$i].'</p>';
        }

        echo '<h4>NÚMEROS IMPARES</h4>';
        for ($i = 0; $i < count($numbers[1]); $i++){
            echo '<p>'.$numbers[1][$i].'</p>';
        }
    ?>
</body>
</html>
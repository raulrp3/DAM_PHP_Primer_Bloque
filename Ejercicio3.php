<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $number = rand(1, 100);
        echo '<p>El número generado de forma aleatoria: '.$number.'.</p></br>';
        if ($number <= 50) {
            echo '<p>El número es menos o igual que 50.</p>';
        }else{
            echo '<p>El número es mayor que 50.</p>';
        }
    ?>
</body>
</html>
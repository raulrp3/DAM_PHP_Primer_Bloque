<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $number = rand(1, 5);
        $numberString = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];
        echo '<p>'.$number.'</p>';
        echo '<p>'.$numberString[$number - 1].'</p>';
    ?>
</body>
</html>
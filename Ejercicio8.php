<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        $number = rand(-10, 10);
        $result = [1 => 'Positivo', 0 => 'Es cero', -1 => 'Negativo'];
        echo '<p>'.$number.'</p>';
        echo '<p>'.$result[$number <=> 0].'</p>';
    ?>
</body>
</html>
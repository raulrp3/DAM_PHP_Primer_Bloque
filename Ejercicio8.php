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
        echo '<p>'.$number.'</p>';
        if ($number > 0){
            $result = 'Positivo';
        }elseif ($number < 0){
            $result = 'Negativo';
        }else{
            $result = 'Es cero';
        }
        echo '<p>'.$result.'</p>';
    ?>
</body>
</html>
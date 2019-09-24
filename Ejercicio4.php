<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php 
        $number = rand(1, 100);
        echo 'El número '. $number;
        $lenght = 0;
        while($number > 0){
            $lenght++;
            $number = floor($number / 10);
        }
        echo ' tiene '.$lenght.' dígitos.'
    ?>
</body>
</html>
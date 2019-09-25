<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        $genders = ['masculino', 'femenino'];
        $colors = ['rojo', 'blanco'];
        $gender = array_rand($genders);
        $color = array_rand($colors);
        $aux = $genders[$gender].' y '.$colors[$color];
        switch($aux) {
            case 'masculino y rojo':
                $result = 'El regalo es un bolso atrevido';
                break;
            case 'masculino y blanco':
                $result = 'El regalo es un pantalón clásico';
                break;
            case 'femenino y rojo':
                $result = 'El regalo es una falda divertida';
                break;
            case 'femenino y blanco':
                $result = 'El regalo es una chaqueta aburrida';
                break;
        }
        echo '<p>'.$aux.'</p>';
        echo '<p>'.$result.'</p>';
    ?>
</body>
</html>
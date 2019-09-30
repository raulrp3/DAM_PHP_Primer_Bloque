<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
        $numbers = [];
        $squares = [];
        $cubes = [];
        for($i = 0; $i < 20; $i++){
            $random = rand(0, 100);
            $numbers[$i] = $random;
            $squares[$i] = pow($random, 2);
            $cubes[$i] = pow($random, 3);
        }
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Números</th>
                <th>Cuadrados</th>
                <th>Cubos</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0;$i < 20; $i++): ?>
                <?php echo '<tr><td>'.$numbers[$i].'</td>'?>
                <?php echo '<td>'.$squares[$i].'</td>'?>
                <?php echo '<td>'.$cubes[$i].'</td></tr>'?>
            <?php endfor ?>
        </tbody>
    </table>
</body>
</html>
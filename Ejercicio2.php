<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $names = ['Raul' => 'Ramirez', 'Marcos' => 'Zabala', 'Francisco' => 'Adan', 'Veronica' => 'Lara']; 
    ?>
    <h4>LISTADO DE NOMBRES</h4>
    <?php foreach($names as $key => $value): ?>
        <dl><?php echo($key)?></dl>
        <dt><?php echo(' '. $value) ?></dt>
        <br>
    <?php endforeach; ?>
</body>
</html>
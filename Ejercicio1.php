<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $names = ['Raul', 'Francisco','Veronica','Marcos'];
    ?>
    <h4>LISTA DESORDENADA</h4>
    <ul>
        <?php foreach($names as $name): ?>
            <li><?php echo($name)?></li>
        <?php endforeach; ?>
    </ul>
    <br>
    <h4>LISTA ORDENADA</h4>
    <ol>
        <?php foreach($names as $name): ?>
            <li><?php echo($name)?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>
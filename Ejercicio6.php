<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Ejercicio6.css">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Nombre de animales</h1>
    <p>Actualice la página para mostrar un nuevo animal.</p>
    <?php
        $images = ['ballena', 'caballito-mar', 'camello', 'cebra', 'elefante', 'hipopotamo', 'jirafa', 'leon', 'leopardo', 'medusa', 'mono', 'oso-blanco', 'oso', 'pajaro', 'pinguino', 'rinoceronte', 'serpiente', 'tigre', 'tortuga-marina', 'tortuga'];
        $animals = ['Ballena', 'Caballito de mar', 'Camello', 'Cebra', 'Elefante', 'Hopopotamo', 'Jirafa', 'Leon', 'Leopardo', 'Medusa', 'Mono', 'Oso blanco', 'Oso', 'Pajaro', 'Pingüino', 'Rinoceronte', 'Serpiente', 'Tigre', 'Tortuga marina', 'Tortuga'];
        $index = rand(0, count($images));
        define('ROUTE', 'img/');
        define('EXTENSION', '.svg');
        echo '<img src = '.ROUTE.$images[$index].EXTENSION.'></img></br>';
        echo '<h4>'.$animals[$index].'</h4>';
    ?>
</body>
</html>
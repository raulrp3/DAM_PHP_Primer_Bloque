<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 9</title>
</head>
<body>
    <select name="" id="year">
        <?php
            for($i = 2000; $i <= 2020; $i++){
                echo '<option value = '.$i.'>'.$i.'</option>';
            }
        ?>
    </select>
</body>
</html>
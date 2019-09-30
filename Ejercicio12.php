<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 12</title>
</head>
<body>
    <table border="1">
        <?php
            echo '<tr>';
            $header = ['X', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            for($i = 0; $i < count($header); $i++){
                echo '<th>'.$header[$i].'</th>';
            }
            echo '</tr>';
            for($i = 1; $i <= 10; $i++){
                echo '<tr><th>'.$i.'</th>';
                for($j = 1; $j <= 10; $j++){
                    echo '<td>'.($i * $j).'</td>';
                }
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>
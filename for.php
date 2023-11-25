<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <h3>Bucle for</h3>
    <?php
        for ($indice=1;$indice<100;$indice++){
            echo 'valor del indice:';
            echo $indice;
            echo '<br>';
            $indice++;
        }
    ?>
</body>
</html>
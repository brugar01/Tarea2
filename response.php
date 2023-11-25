<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <title>Response</title>
</head>
<body>
    <div>
        <h3>Repuesta PHP a Petición</h3>
    </div>
    <div>
        <?php
        if(isset($_POST['numero']) && !empty($_POST())){
            $numero = $_POST['numero'];
            $inicio = 1;
            while ($inicio<=$numero){
                echo 'Valor generado: '. $inicio;
                $inicio++;
            }
        } else {
            echo 'Valor no válido';
        }
        ?>
    </div>
</body>
</html>




#<?php
#        $indice=1;
#        $fin = rand(1,100);
#        while ($indice<=$fin) {
#            echo 'Valor del indice: ';
#            echo $indice;
#            echo '<br>';
#            $indice++;
#        }
#        ?>

<!DOCTYPE <!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
        if ($operacion=='suma') {
            ?> <h1>Operacion SUMA</h1>
           <?php
           $suma=$a+$b;
            echo "Suma=".$suma;
        }
    ?>
   <?php
        if ($operacion=='multiplicacion') {
            ?> <h1>Operacion Multiplicacion</h1>
           <?php
           $multiplica=$a*$b;
            echo "Multiplicacion=".$multiplica;
        }
    ?>

    </body>
</html>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $valor = $_GET['valor'];
        if ($valor%2) {
            echo "Número Impar";
            }
        else {
            echo "Número par";
            }
        ?>
    </body>
</html>

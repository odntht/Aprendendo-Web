<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $valor = $_GET['valor'];
        if ($valor%10 == 0) {
            echo "Número é multiplo de 5 e de 10";
            }
        else {
            echo "Informe outro número.";
            }
        ?>
    </body>
</html>

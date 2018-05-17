<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $valor = $_GET['valor'];
        if ($valor > 5000) {
            echo "Classe A";
        } elseif ($valor > 2000) {
            echo "Classe B";
        } elseif ($valor > 1000) {
            echo "Classe C";
        } else {
            echo "Não há classe definida";
        }
        ?>
    </body>
</html>

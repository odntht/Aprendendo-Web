<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $carro = ["Uno", "Palio", "Corsa", "Gol", "Clio", "Saveiro"];
        
        sort($carro);
        /*
        print_r($carro);
        echo "<br>" . count($carro);
        echo "<br>" . sizeof($carro);
        echo "<br>";
        */
        for ($i = (count($carro))-1; $i >= 0; $i--) {
            echo "O valor do índice $i é <strong>$carro[$i]</strong><br>";
        }
        ?>
    </body>
</html>

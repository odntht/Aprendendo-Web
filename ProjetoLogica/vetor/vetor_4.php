<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $cesta = ["Banana", "Manga", "Maracujá", "Limão", "Laranja"];
        print_r($cesta);
        echo "<br>";
        array_pop($cesta);
        print_r($cesta);
        echo "<br>";
        unset($cesta[0]);
        print_r($cesta);
        $cesta[2] = null;
        echo "<br>";
        print_r($cesta);
        ?>
    </body>
</html>

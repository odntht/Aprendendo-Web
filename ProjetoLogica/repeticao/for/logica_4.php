<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $conta = 0;
        $contaPrimos = 0;
        echo "Contador de números primos<br>";
        for ($i = 1; $i <= 10000; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $conta++;
                }
            }
               

            if ($conta == 2) {
                $contaPrimos++;
            }
            if ($conta != 2) { 
                echo $i."<br>";
            }
            $conta = 0;
        }
        echo $contaPrimos+1;
        ?>
    </body>
</html>
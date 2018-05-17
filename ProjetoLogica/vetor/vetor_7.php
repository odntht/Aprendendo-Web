<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $carro = ["Uno", "Palio", "Corsa", "Gol", "Clio", "Saveiro"];
        
       for ($i = 0; $i < sizeof($carro); $i++) {
           if ($i==0) {
               echo "O valor do índice 4 é <strong>".$carro[sizeof($carro)-1]."</strong><br>";
           } 
           elseif ($i==4){
               echo "O valor do índice 0 é <strong>".$carro[0]."</strong><br>";
           }
           else
           echo "O valor do índice $i é <strong>$carro[$i]</strong><br>";
            }
        ?>
    </body>
</html>

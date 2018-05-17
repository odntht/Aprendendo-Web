<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           $n1 = $_GET['n1'];
           $n2 = $_GET['n2'];
           $acao = $_GET['acao'];
           echo "1 para subtração<br>2 para adição<br>3 para multiplicaçào<br>4 para divisão<br><br>";
           echo "Valor 1 = $n1,<br>Valor 2 = $n2,<br>Ação escolhida = $acao<br><br>";
           
           switch ($acao)   {
               case '1':
                   echo $n1-$n2;
                   break;
               case '2':
                   echo $n1+$n2;
                   break;
               case '3':
                   echo $n1*$n2;
                   break;
               case '4':
                   echo $n1/$n2;
                   break;
               default:
                   echo "Esta ação não foi implementada!";
                            }
        ?>
    </body>
</html>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        # Criar um vetor com 10 posições, criando com nomes. Retirar os nomes que forem iguais e não imprimi-los.
        $input = array("Fernando", "Pedro", "Caio", "Guilherme", "Carolina", "Pedro");
        echo "Vetor original: <br>";
        print_r($input);
        echo "<br><br> Vetor removido dados duplicados: <br>";
        $result = array_unique($input);
        print_r($result);
        ?>
    </body>
</html>

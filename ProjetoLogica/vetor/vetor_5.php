<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $vetor = ["a","b","c","d","e","f"];
        print_r($vetor);
        echo "<br>".count($vetor);
        echo "<br>".sizeof($vetor);
        $i = 0;
        echo "<br><br>";
        for ($i=0; $i<(count($vetor)); $i++) {
        echo "O valor do índice $i é <strong>$vetor[$i]</strong><br>";
        }

        ?>
    </body>
</html>

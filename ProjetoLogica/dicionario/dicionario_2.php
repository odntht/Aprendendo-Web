<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $pessoa1 = ["nome" => "Fernando", "idade" => 27];
        $pessoa2 = ["nome" => "Amanda", "idade" => 27];
        
        $pessoas = [$pessoa1, $pessoa2];
        
        #print_r($pessoas);
        
        foreach ($pessoas as $item) {
            echo $item["nome"]." - ";
            echo $item["idade"]."<br>";
            
        }
        
        ?>
    </body>
</html>

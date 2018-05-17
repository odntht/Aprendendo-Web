<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $pessoa1 = ["nome" => "Fernando", "idade" => 27, "estadoCivil" => "Solteiro"];
        $pessoa2 = ["nome" => "Amanda", "idade" => 27, "estadoCivil" => "Solteiro"];
        $pessoa3 = ["nome" => "Hiéracles", "idade" => 23, "estadoCivil" => "Casado"];
        
        $pessoas = [$pessoa1, $pessoa2, $pessoa3];
        
        for ($i = 0; $i < sizeof($pessoas); $i++)
        {
        echo $pessoas[$i]["nome"] . " - ";
        echo $pessoas[$i]["idade"] . " - ";
        echo $pessoas[$i]["estadoCivil"] . "<br>";
        }
        ?>
    </body>
</html>

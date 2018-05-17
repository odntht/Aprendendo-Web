<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $carro1 = ["marca" => "Fiat", "modelo" => "Palio"];
        $carro2 = ["marca" => "Honda" , "modelo" => "Fit"];
        
        $carros = [$carro1,$carro2];
        
        $peca1 = ["nome" => "Pastilha de Freio", "valor" => 200.00];
        $peca2 = ["nome" => "Correia Dentada", "valor" => 115.00];
        $peca3 = ["nome" => "Pneu", "valor" => 180.00];
        
        $pecas = [$peca1, $peca2, $peca3];
        
        $oficina1 = ["carro" => $carro1, "peca" => $peca2];
        $oficina2 = ["carro" => $carro2, "peca" => $peca3];
        
        $oficina = [$oficina1, $oficina2];
        
        foreach ($oficina as $item) {
            echo "<br>";
            print_r ($item["carro"]["marca"]);
            echo " - ";
            print_r ($item["carro"]["modelo"]);
            echo " - ";
            print_r ($item["peca"]["nome"]);
            echo " - ";
            print_r ($item["peca"]["valor"]);
            echo "<br>";
        }
            
        
        for($i = 0; $i < sizeof($oficina); $i++)
        {
            
            echo "<br>".$oficina[$i]["carro"]["marca"]. " - ";
            echo $oficina[$i]["carro"]["modelo"]. " - ";
            echo $oficina[$i]["peca"]["nome"]. " - ";
            echo "R$: ".$oficina[$i]["peca"]["valor"]. "<br>";
        }
        
        
        ?>
    </body>
</html>

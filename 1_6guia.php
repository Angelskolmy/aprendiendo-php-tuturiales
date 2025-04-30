<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejrcicio 6</title>
</head> 

<body>
    <?php  
        $contador+=0; 
        $contador_1+=0;
        #ciclo for 
        $valuer=2;

        echo"multiplicaciones for <br><br>"; 
        
        for($f1 = 1 ; $f1<= 10; $f1++){ 

            $operacion= $valuer*$f1;   

            echo "$valuer x $f1 = $operacion <br><br>"; 

        } 
        echo"multiplicaciones while <br><br>"; 
        while ($contador<10){ 
            $contador+=1;  
            $valor_unico= 2;  

            $operacion_2= $valor_unico*$contador;
            
            echo"$valor_unico x $contador = $operacion_2 <br><br> ";
        }
        echo"multiplicaciones do while <br><br>";  

        do{ 
            $contador_1+=1;  
            $valor_unico= 2;  

            $operacion_2= $valor_unico*$contador_1;
            
            echo"$valor_unico x $contador_1 = $operacion_2 <br><br> ";
        } 
        while ($contador_1<10);
    ?>
</body>
</html>
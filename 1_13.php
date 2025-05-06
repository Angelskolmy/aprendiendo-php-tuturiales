<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 13</title>
</head>
<body>
    <?php 
    
        $apertura=fopen("pedido.txt","r") or die("no se pudo leer el archivo");   

        while(!feof($apertura)){

            $interpretacion=fgets($apertura); 
            $arreglos=nl2br($interpretacion);  
            echo $arreglos;


        } 
        fclose($apertura);



    ?>
</body>
</html>
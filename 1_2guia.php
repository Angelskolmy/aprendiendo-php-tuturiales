<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<body>
    <?php 
        $rango= rand(1,100); 

        if ($rango<=50){ 

            echo $rango,"es menor de 50";} 
             
        else{ 

            echo $rango,"es mayor a 50";

        }
    ?>
</body>
</html>
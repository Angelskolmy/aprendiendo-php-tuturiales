<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_7</title>
</head>
<body>
    <?php 
    
        $nombre=$_REQUEST['nombre']; 

        $edad=$_REQUEST['edad'];   

        if($edad>=18){  

            echo"$nombre,es mayor de edad";
        }
        else{ 

            echo"$nombre,es menor de edad"; 

        }
        
    
    ?>
</body>
</html>
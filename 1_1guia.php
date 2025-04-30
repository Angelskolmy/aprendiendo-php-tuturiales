<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-1</title>
</head>
<body> 
    <h1>hola</h1>
    <?php  
    
        $fecha= date("d/m/y h:i:s");  

        echo " el dia de hoy es",$fecha; 

        if ($fecha>=10){ 

            echo"pagina desactivada";
        }

        else { 

            echo"pagina activa";
        }

    ?>
</body>
</html>|
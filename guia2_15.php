<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 18</title>
</head>
<body> 
    <?php 
    
        function comparacion(){  


            $nombre=$_REQUEST['nme'];
            $contraseña1=$_REQUEST['cont1']; 
            $contraseña2=$_REQUEST['cont2']; 

            if($contraseña1==$contraseña2){  

                echo"usuario= ".$nombre."<br>";
                echo"contraseña ". $contraseña1 ." confirmada y registrada"."<br>";

            } 

            else{ 

                echo"usuario= ".$nombre."<br>";
                echo"contraseña incorrecta no es igual volver a registrar"."<br>";

            }

        } 
        
        comparacion();

    ?>
</body>
</html>
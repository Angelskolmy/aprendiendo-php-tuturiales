<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 9 </title>
</head>
<body>
    <?php   

        $contador_deportes=0;

        $nombre=$_REQUEST['nombre']; 


        if(isset($_REQUEST['voleibol'])){ 

            $contador_deportes+=1; 



        }  

        if(isset($_REQUEST['futbol'])){ 


            $contador_deportes+=1;

        } 

        if(isset($_REQUEST['basket'])){ 


            $contador_deportes+=1;

        }  

        if(isset($_REQUEST['tenis'])){ 


            $contador_deportes+=1;

        }   

        echo"$nombre practica $contador_deportes deportes"


        




    ?>
</body>
</html>
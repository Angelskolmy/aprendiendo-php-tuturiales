<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 8</title>
</head>
<body> 
    <?php 
        
        $nombre_formulario= $_REQUEST['nombre'];  
        $opcion_formulario= $_REQUEST['1']; 

        if ($opcion_formulario==1){ 

            echo"usted $nombre_formulario no tiene estudios"; 

        }
        
        elseif($opcion_formulario==2){ 

            echo"usted $nombre_formulario tiene estudios primarios"; 

        } 

        elseif($opcion_formulario==3){ 

            echo"usted $nombre_formulario tiene estudios secundarios"; 

        } 

    ?>
</body>
</html>
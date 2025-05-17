<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 18</title>
</head>
<body>
    <?php 
    
        function buscar (){ 

            $primera_conexion=mysqli_connect("localhost","root","","base1")or die("la conexion fallo"); 
            
            $operacion_2=mysqli_query($primera_conexion,"select codigo, nombre, mail, codigo_curso from alumnos where codigo='$_REQUEST[FIND]'") or 
            die("error en la busquedad".mysqli_error($primera_conexion)); 

            if($listasql=mysqli_fetch_array($operacion_2)){ 

                echo"NOMBRE// ".$listasql['nombre']."<br>";  
                echo"id// ".$listasql['codigo']."<br>";  
                echo"EMAIL// ".$listasql['mail']."<br>";  
                echo"id curso// ".$listasql['codigo_curso']."<br>"; 

            } 

            else{

                echo"dato ingresado ". $_REQUEST['FIND']. " no encontrado";

            }  

            mysqli_close($primera_conexion);

        } 

        if(isset($_REQUEST['conf'])){ 

            buscar ();

        }

           

    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        function trag(){  

            session_start();

            $correo_electronico=$_REQUEST['elctronicos']; 

            $conection__2=mysqli_connect("localhost","root","","base1")or die("fallo de conecion sql"); 

            $comando_arkham=mysqli_query($conection__2,"select codigo, nombre, mail, codigo_curso from alumnos WHERE mail='$correo_electronico'")or die("fallo de comando sql".mysqli_error($conection__2)); 

            if($coleccion=mysqli_fetch_array($comando_arkham)){ 

                $_SESSION['name']=$coleccion['nombre']; 

                header("Location: formulario_31.php?patapim=true");
            } 

            else{ 

                header("Location: formulario_31.php?crocodilo=true");
            }

        } 
        if(isset($_REQUEST['encripted'])){ 
            
            trag();
        }

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function insertar(){  

            $conectaaaaar=mysqli_connect("localhost","root","","base1")or die("error de conexion"); 

            $nombre=$_REQUEST['name']; 
            $correo=$_REQUEST['electrike']; 
            $curso=$_REQUEST['opcion_curso']; 
            $nacimiento=$_REQUEST['tiempo']; 


           $estermina33=mysqli_query($conectaaaaar,"select codigo, nombre, mail, codigo_curso, fecha_nacimiento from alumnos WHERE mail='$correo'")or die("error en el comando sql".mysqli_error($conectaaaaar));
 

            if($lista=mysqli_fetch_array($estermina33)){ 
                header("Location: formulario_37.php?validacion=true"); 
                exit;
            }



            $inertando=mysqli_query($conectaaaaar,"insert into alumnos ( nombre, mail, codigo_curso, fecha_nacimiento)values
            ('$nombre','$correo','$curso','$nacimiento')")or die("error de comando".mysqli_error($conectaaaaar)); 

            if($inertando){

                header("Location: formulario_37.php?exito=true"); 
                exit;
            }
    

        } 
        if(isset($_REQUEST['yutu'])){ 
            insertar();
        }
        
    ?>
</body>
</html>
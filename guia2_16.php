<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 16</title>
</head>
<body>
    <?php  

        
        $ingreso= mysqli_connect("localhost","root","","base1") or die("error en la conexion"); 

        mysqli_query($ingreso,"insert into alumnos  (nombre,mail,codigo_curso) values

         ('$_REQUEST[nombre]','$_REQUEST[arroba]','$_REQUEST[curso_tipo]')")  

         or die ("no se guardaron los datos".mysqli_error($ingreso));  

        mysqli_close($ingreso); 

        echo "datos ingresados";

    ?>
</body>
</html>
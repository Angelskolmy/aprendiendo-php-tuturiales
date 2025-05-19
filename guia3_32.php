<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 32</title>
</head>
<body>
    <?php 

        function retornarConexion(){ 

            $ranked=mysqli_connect("localhost","root","","base1")or die("fallo de conexion"); 

            $cod_codsqlq=mysqli_query($ranked,"select codigo, nombre, mail, codigo_curso from alumnos")or die("".mysqli_error($ranked)); 

            $contador=0;

            while($range=mysqli_fetch_array($cod_codsqlq)){ 
                
                $contador+=1;
                
                echo"<h3 style='text-align: center;'>REGISTRO: $contador</h3>";

                echo"<hr>";
                echo"nombre= $range[nombre]"."<br>";  
                echo"Id= $range[codigo]"."<br>"; 
                echo"correo electronico= $range[mail]"."<br>"; 
                echo"curso= $range[codigo_curso]"."<br>"; 
                echo"<hr>";
                
            }

        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 17</title>
</head>
<body> 
    <?php 

        function listar_basedatos(){  
            
            $listar=mysqli_connect("localhost","root","","base1") or die("fallo la conexion"); 

            $procreso=mysqli_query($listar,"select codigo_g, nombre_curso  from cursos") 
            or die("la consulta fallo".mysqli_error($listar)); 

            while($listaselect=mysqli_fetch_array($procreso)){  

                echo"curso= ".$listaselect['nombre_curso']."<br>";  

                echo"id= ".$listaselect['codigo_g']."<br>"; 

                echo"<hr>"."<br>";

            } 

            mysqli_close($listar);

        }  

        if(isset($_REQUEST['list'])){ 

            listar_basedatos(); 

        }
    
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 26</title>
</head>
<body> 
    <h3>CURSOS DISPONIBLES</h3>
    <?php
    
        $conexion_basa1=mysqli_connect("localhost","root","","base1")or die("fallo de conexion"); 

        $comando_qls=mysqli_query($conexion_basa1,"select codigo_g, nombre_curso from cursos")or die("error en la conexion".mysqli_error($conexion_basa1)); 

        while($arkam=mysqli_fetch_array($comando_qls)){ 

            echo"<a href='guia2_26.php?hercules=$arkam[codigo_g]'>$arkam[nombre_curso]</a><br>"; 

            echo"<br>";
        } 

        mysqli_close($conexion_basa1);
    ?> 
    
</body>
</html>
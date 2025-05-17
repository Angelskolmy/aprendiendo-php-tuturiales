<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 26</title>
</head>
<?php
function roland (){ 

    $contra_maestre=$_REQUEST['hercules']; 

    $var1_conect=mysqli_connect("localhost","root","","base1")or die("fallo de conexion"); 

    $imprecion=mysqli_query($var1_conect,"select codigo, nombre, mail,  codigo_curso from alumnos WHERE codigo_curso='$contra_maestre'")or die("error en comando sql".mysqli_error($var1_conect)); 

    while($dicionary=mysqli_fetch_array($imprecion)){ 
        
        echo"<hr><br>";
        echo"Cedula= $dicionary[codigo]"."<br>"; 
        echo"Nombre= $dicionary[nombre]"."<br>"; 
        echo"Correo electronico= $dicionary[mail]"."<br>"; 
        echo"<hr><br>";

    } 

} 
if($_REQUEST['hercules']){}
    roland ();
?>
<body>
    
</body>
</html>
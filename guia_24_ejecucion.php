<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATEo</title>
</head> 
<?php 

    function up_almer(){ 

        $nombree=$_REQUEST['nombre']; 
        $email=$_REQUEST['electronic']; 
        $cursoo=$_REQUEST['LEGARD']; 
        $comp_mast=$_REQUEST['comparador_maestro']; 

        $link=mysqli_connect("localhost","root","","base1")or die("fallo en conexion"); 

        $comando_termina=mysqli_query($link,"update alumnos set nombre='$nombree', mail='$email', codigo_curso='$cursoo' WHERE codigo='$comp_mast'")or die("error en comando sql".mysqli_errno($link));

        mysqli_close($link); 

        if($link){ 
            echo"datos actualizados";
        }

    } 
    if($_REQUEST['uroboros']){ 

        up_almer();

    }

?>
<body>
    
</body>
</html>
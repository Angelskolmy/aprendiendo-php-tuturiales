<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejecucion</title>
</head> 
<?php 

    $new_nombre=$_REQUEST['new_arc_name']; 
    $tank=$_REQUEST['compp'];

    $conection=mysqli_connect("localhost","root","","base1")or die("error en la conecion"); 

    $erquet=mysqli_query($conection,"update cursos set  nombre_curso='$new_nombre' WHERE codigo_g='$tank'")or die("error en el comando".mysqli_error($conection)); 

    if($erquet){ 

        header("Location: formulario_20.php?mansaje1=true");
    }

?>
<body>
    
</body>
</html>
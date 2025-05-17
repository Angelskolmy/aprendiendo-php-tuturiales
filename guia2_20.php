<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>busqueda previa</title>
</head> 
<?php 

function block_1(){ 

    $dato_comparacion=$_REQUEST['alright'];

    $conact=mysqli_connect("localhost","root","","base1")or die("error en la conexion"); 

    $sel=mysqli_query($conact,"select codigo_g, nombre_curso from cursos WHERE codigo_g='$dato_comparacion'")or die("".mysqli_error($conact)); 

    if($lista=mysqli_fetch_array($sel)){ 

?>
    <form action="ejecucion_20.php" method="post">

        <label for="">nuevo nombre</label><br>
        <input type="text" name="new_arc_name">
        <br><br>  

        <input type="hidden" name="compp" value="<?php echo"$lista[codigo_g]"; ?>" >

        <input type="submit" value="update">

    </form>
<?php  
    } 

    else{ 
        header("Location: formulario_20.php?mansaje=true");
    } 
    mysqli_close($conact);
} 

if(isset($_REQUEST['kahal'])){ 

    block_1();
}
?>
<body>
    
</body>
</html>
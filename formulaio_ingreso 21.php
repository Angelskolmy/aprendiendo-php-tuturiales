<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fornulario 25</title>
</head> 
<?php 
if(isset($_GET['tran'])&& $_GET['tran']==true){ 
    echo"ingreso exitoso";
}
?>

<body>
    <form action="ingreso_21.php" method="post">

    <label for="">nombre</label><br> 
    <input type="text" name="mote"> 
    <br><br> 

    <label for="">correo electronico</label><br> 
    <input type="text" name="mail"> 
    <br><br>  

    <?php 
    
        $coneccion1=mysqli_connect("localhost","root","","base1")or die("error es la coneccion sql");

        $jecutak=mysqli_query($coneccion1,"select codigo_g, nombre_curso from cursos")or die("".mysqli_error($coneccion1));
        
        while($listak=mysqli_fetch_array($jecutak)){ 

            echo"<label for=''>$listak[nombre_curso]</label><br> 
            <input type='radio' value='$listak[codigo_g]' name='opcion_curso'> 
            <br><br>";

        } 
        mysqli_close($coneccion1);
    ?>
    <input type="submit" value="registrar" name="op">

    </form>
</body>
</html>
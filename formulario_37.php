<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<?php 
    if(isset($_GET['validacion'])&& $_GET['validacion']==true){
        echo"este correo ya existe use otro"; 
        echo"<br><br>";
    } 

    if(isset($_GET['exito'])&& $_GET['exito']==true){
        echo"usuario insertado con exito"; 
        echo"<br><br>";
    }

?>
<body>
    <form action="guia3_37.php" method="post">

        <label>nombre</label><br> 
        <input type="text" name="name"> 
        <br><br> 

        <label>correo electronico</label><br>
        <input type="text" name="electrike"> 
        <br><br>   


        <label>fecha de nacimiento</label> <br>
        <input type="date" name="tiempo" min="1900-01-01" max="2015-12-31" >
        <br><br> 

        <label>curso</label><br> 
        <select name="opcion_curso"> 

            <?php 
                $conectar=mysqli_connect("localhost","root","","base1")or die("error de conexion"); 

                $estermina=mysqli_query($conectar,"select codigo_g, nombre_curso from cursos")or die("error en el comando sql".mysqli_error($conectar)); 

                while($listar_opciones=mysqli_fetch_array($estermina)){ 

                    echo"<option value='$listar_opciones[codigo_g]'>$listar_opciones[nombre_curso]</option>";
                } 

                mysqli_error($conectar)
            ?>
                
        </select> 
        <br><br> 

        <input type="submit" value="envio" name="yutu">

    </form>
</body>
</html>
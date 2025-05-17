<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario ejercicio 24</title>
</head> 
<?php 

    if(isset($_GET['arka'])&&$_GET['arka']){ 

        echo"no exiten id menor a 1";
    }

?>
<body>
    <form action="guia2_24_validacion.php" method="post"> 

        <label>Codigo de estudiante</label><br>
        <input type="number" name="cod_vad"> 
        <br><br> 
        
        <input type="submit" value="enviar">


    </form>
</body>
</html>
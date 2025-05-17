<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head> 
<?php 
    if(isset($_GET['mansaje'])&& $_GET['mansaje']==true){ 

        echo"cuso inexistente";
    }
?> 
<?php 
    if(isset($_GET['mansaje1'])&& $_GET['mansaje1']==true){ 

        echo"cuso editado con exito";
    }
?> 
<body>
    <form action="guia2_20.php"> 

    <label>id curso a editar</label><br> 
    <input type="number" name="alright" id=""> 
    <br><br> 

    <input type="submit" value="envio" name="kahal">

    </form>
</body>
</html>
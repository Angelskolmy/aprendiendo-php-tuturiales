<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<?php
    if(isset($_REQUEST['patapim']) && $_REQUEST['patapim']==true){ 

        echo"usuario encontrado inicie sesion"; 
        echo"<br><br>";
    }
?> 
<?php
    if(isset($_REQUEST['crocodilo']) && $_REQUEST['crocodilo']==true){ 

        echo"usuria inxistente"; 
        echo"<br><br>";
    }
?> 
<?php
    if(isset($_REQUEST['guns']) && $_REQUEST['guns']==true){ 

        echo"no se puede ingresar sin session previa"; 
        echo"<br><br>";
    }
?>
<body>
    <form action="guia3_31.php" method="post">

        <label></label><br> 
        <input type="text" name="elctronicos"> 
        <br><br> 

        <input type="submit" value="envio" name="encripted"> 
        <br><br> 

    </form> 

    <br><br> 

    <form action="guia3_31part3.php" method="post"> 

        <input type="submit" value="incie sesion" name="relihgt">
    </form>
    
    
</body>
</html>
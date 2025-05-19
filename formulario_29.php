<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 29</title>
</head>
<body>  
    <?php 
        if(isset($_GET['rangeros'])&& $_GET['rangeros']==true){ 
            echo"ingresado con exito";
        } 
    ?>
    <?php 
        if(isset($_COOKIE['Nombre'])){ 
            $anterior=$_COOKIE['Nombre'];
        } 
        else{ 
            $anterior=null;
        }
    ?>
    
    <form action="guia3_29.php" method="post"> 

        <label>NOMBRE</label><br>
        <input type="text" name="kor" placeholder="<?php echo"$anterior";?>">
        <br><br> 

        <input type="submit" name="btn11" value="confirmar">


    </form>

</body>
</html>
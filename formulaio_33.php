<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 33</title>
</head>
<body> 
    <?php 

        if(isset($_GET['poggers'])&& $_GET['poggers']==true){ 

            echo"contraseña incorrecta";

        }
    
    
    ?>
    <form action="guia3_33.php" method="post"> 

        <label>contraseña</label><br> 
        <input type="password" name="rocker" > 
        <br><br> 

        <input type="submit" value="envio" name="huishu">

    </form>
</body>
</html>
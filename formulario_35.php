<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 35</title>
</head> 
 <?php 
 
    if(isset($_GET['tuki']) && $_GET['tuki']==true){ 
        echo"reclamacion guardada";
    }
 
 ?>
<body>
    <form action="guia3_35part2.php" method="post"> 

        <label>nombre</label><br> 
        <input type="text" name="nambre"> 
        <br><br> 

        <label>queja</label> <br>
        <textarea name="quejarte"></textarea> 
        <br><br> 

        <input type="submit" value="envio" name="raikiri">
    </form> 
    <br><br> 

    <button><a href="guia3_35part3.php?slayer">QUEJAS</a></button>
</body>
</html>
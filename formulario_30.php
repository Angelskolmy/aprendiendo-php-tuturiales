<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<?php 
    if(isset($_COOKIE['notc'])){

        echo"<h1>$_COOKIE[notc]</h1>"; 
        echo"<br><br>";
    }

?>
<body>
    <form action="guia3_30.php" method="post"> 

        <label>noticia deportiva</label><br> 
        <input type="radio" name="notc" value="deporte">
        <br><br> 

        <label>noticia economica</label><br> 
        <input type="radio" name="notc" value="economia">
        <br><br> 

        <label>noticia politica</label><br> 
        <input type="radio" name="notc" value="politica">
        <br><br> 

        <input type="submit" value="establecer"  name="btn12">
    </form>  
    <br><br> 

    <button><a href="guia3_30.php?archeros">BORRAR</a></button> 

    <?php 
        if(isset($_GET['kirsten']) && $_GET['kirsten']){ 

            echo"preferencia guarda ";

        } 

        if(isset($_GET['springer']) && $_GET['springer']){ 

            echo"preferencia borrada";
        }
    
    ?>
</body>
</html>
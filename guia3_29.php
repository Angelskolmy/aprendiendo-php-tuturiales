<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 29</title>
</head>
<body>
    <?php
    
        function cookie(){

            $nombre_cookie=$_REQUEST['kor'];

            setcookie("Nombre","$nombre_cookie",time()+60*60*24*365,"/");  

            header("Location: formulario_29.php?rangeros=true");
        } 
        if(isset($_REQUEST['btn11'])){ 

            cookie();
        } 
        
    ?>
</body>
</html>
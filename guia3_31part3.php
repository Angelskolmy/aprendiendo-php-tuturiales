<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejecucion</title>
</head>
<body>
    <?php 
        session_start(); 

        function inicio(){ 

            if(isset($_SESSION['name'])){

                echo"bienvenido $_SESSION[name]"."<br><br>"; 
                echo"<img src='img/peppo.jpg' width='500px' height='500px'>";

            } 
            else{ 
                header("Location: formulario_31.php?guns=true");
            }

        } 
        if(isset($_REQUEST['relihgt'])){ 

            inicio();
        }
    
    ?> 
    
</body>
</html>
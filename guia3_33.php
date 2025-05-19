<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 33</title>
</head>
<body> 
    <?php 
        
        function comparar_pasword(){ 

            $contraseña=$_REQUEST['rocker']; 

            if($contraseña=="z80"){ 
                
                echo"bienvenido"."<br>"; 
                echo"<img src='img/peppo.jpg' width='500px' height='500px'>";

            }
            else{ 

                header("Location: formulaio_33.php?poggers=true");

            }
        } 

        if(isset($_REQUEST['huishu'])){ 
            comparar_pasword();
        }
    
    ?>
</body>
</html>
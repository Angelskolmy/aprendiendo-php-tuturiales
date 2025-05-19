<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 36</title>
</head>
<body>
    <?php 
        function raikard(){ 
            
            $dia=$_REQUEST['day']; 
            $mes=$_REQUEST['month']; 
            $año=$_REQUEST['year'];

            if(is_numeric($dia) && is_numeric($mes) && is_numeric($año)){ 

                if(checkdate($mes,$dia,$año)){
                    
                    header("Location: formulario_36.php?afirmativo=true");
                } 
                else{
                     header("Location: formulario_36.php?negativo=true");
                }

            } 

            else{ 
                 header("Location: formulario_36.php?negativo=true");
            }
        } 
        if(isset($_REQUEST['rolor'])){ 
            raikard();
        }
    
    ?>
</body>
</html>
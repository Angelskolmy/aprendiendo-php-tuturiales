<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercico 35 parte 3</title>
</head>
<body>
    <?php
        function lectura(){

            $remplazo_sql3=fopen("quejas.txt","r") or die("error de creacion"); 

            while(!feof($remplazo_sql3)){ 

                $linea=fgets($remplazo_sql3); 
                $linea2=nl2br($linea); 
                echo $linea2;

            } 
            fclose($remplazo_sql3);
        } 
        if(isset($_GET['slayer'])){
            lectura();
        }
    ?>
</body>
</html>
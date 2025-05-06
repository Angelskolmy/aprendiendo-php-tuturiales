<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 12</title>
</head>
<body>
    <?php  

        $texto=fopen("pedido.txt","a") or die("no se pudo crear archivo");
                          
        fputs($texto,$_REQUEST['nombre']); 
        fputs($texto,"\n");  

        fputs($texto,$_REQUEST['direction']); 
        fputs($texto,"\n");  

        fputs($texto,"-----------------------------------------------TIPO PIZZA---------------------------------------------------------"); 
        fputs($texto,"\n");    

        if(isset($_REQUEST['napolitana'])){ 

            fputs($texto,"napolitana");  
            fputs($texto,"\n");

            fputs($texto,$_REQUEST['cantidad_1']);  
            fputs($texto,"\n"); 

        
        }  

        

        if(isset($_REQUEST['jamonqueso'])){ 

            fputs($texto,"jamon y queso");  
            fputs($texto,"\n");

            fputs($texto,$_REQUEST['cantidad_2']);  
            fputs($texto,"\n");
        }  

        if(isset($_REQUEST['mozarreli'])){ 

            fputs($texto,"mozarela");  
            fputs($texto,"\n");

            fputs($texto,$_REQUEST['cantidad_3']);  
            fputs($texto,"\n");
        }  

        fputs($texto,"--------------------------------------------------------------------------------------------------------"); 
        fputs($texto,"\n"); 

        fclose($texto); 

        echo"datos cargados exitosamente";
    ?>

</body>
</html>
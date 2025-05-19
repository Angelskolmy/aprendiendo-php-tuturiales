<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 35 pare 2</title>
</head>
<body>
    <?php 

        function guradado (){ 

            $nombre=$_REQUEST['nambre']; 
            $descricion=$_REQUEST['quejarte'];  
            $fecha=date("d/m/y"); 
            $hora=date("h: i :s"); 

            $remplazo_sql=fopen("quejas.txt","a") or die("error de creacion"); 
            
            fputs($remplazo_sql,"nombre= $nombre"); 
            fputs($remplazo_sql,"\n");  
            fputs($remplazo_sql,"descripcion=$descricion"); 
            fputs($remplazo_sql,"\n"); 
            fputs($remplazo_sql,"fecha= $fecha"); 
            fputs($remplazo_sql,"\n");  
            fputs($remplazo_sql,"hora= $hora"); 
            fputs($remplazo_sql,"\n");  
            fputs($remplazo_sql,"---------------------------------------------------------------");
             
            fclose($remplazo_sql); 

            header("Location: formulario_35.php?tuki=true");
        } 
        if(isset($_REQUEST['raikiri'])){
            guradado ();
        }
    
    ?>
</body>
</html>
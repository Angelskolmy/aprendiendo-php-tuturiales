<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 27</title>
</head>
<body>
    <?php 

        if(isset($_REQUEST['ralix'])){ 

            $index=$_REQUEST['ralix'];
        } 
        else{

            $index=0;
        }  

        $linkeo_emp=mysqli_connect("localhost","root","","base1")or die("error en la conecion sql"); 

        $coders=mysqli_query($linkeo_emp,"select nombre, mail, codigo from alumnos limit $index,3")or die("error de comando".$linkeo_emp);

        $cont_avanze=0;

        while($compilado=mysqli_fetch_array($coders)){  

            $cont_avanze+=1;

            echo"<hr><br>";
            echo"Cedula= $compilado[codigo]"."<br>"; 
            echo"Nombre= $compilado[nombre]"."<br>"; 
            echo"Correo electronico= $compilado[mail]"."<br>"; 
            echo"<hr><br>";

        }
        
        if ($index==0){ 

            echo"ANTERIOR";
        }  
        else{ 

            $previo=$index-3;   
            echo"<a href='guia2_27.php?ralix=$previo'>ANTERIOR</a>";
        }

        if($cont_avanze==3){ 
            $next=$index+3;
            echo"<a href='guia2_27.php?ralix=$next'>siguiente</a>";
        } 
        else{ 
            echo"SIGUIENTE";
        }
        
      mysqli_close($linkeo_emp);  
    ?> 
    
</body>
</html>
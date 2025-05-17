<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 23</title>
</head> 
<?php 

    function allredy (){ 

        $co5nactarr=mysqli_connect("localhost","root","","base1") or die("error en la conexion"); 

        $cont=mysqli_query($co5nactarr,"select nombre_curso from cursos")or die(mysqli_error($co5nactarr)."error de comando");  
        
        $cont22=mysqli_query($co5nactarr,"select count(nombre_curso) as 'hola' from cursos")or die(mysqli_error($co5nactarr)."error de comando");

        while($last=mysqli_fetch_array($cont)){

            echo"curso= $last[nombre_curso]"."<br>";

        } 
       
        if($lost=mysqli_fetch_array($cont22)){
            echo"cantidad= $lost[hola]"."<br>";
        }


    } 
    if(isset($_REQUEST['tu'])){ 

        allredy ();
    }

?>
<body>
    
</body>
</html>
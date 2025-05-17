<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 19</title>
</head>
<body>
    <?php 

        function borrar (){ 

            $conexxion_3=mysqli_connect("localhost","root","","base1") or die("error en la conexion"); 

            $busqueda= mysqli_query($conexxion_3,"select * from cursos where nombre_curso='$_REQUEST[cur]'") or 
            die("fallo la busqueda".mysqli_error($conexxion_3));

            if($lista_condicional=mysqli_fetch_array($busqueda)){

                $borrado=mysqli_query($conexxion_3,"delete from cursos where nombre_curso='$_REQUEST[cur]' ")or  
                die("fallo en la ejecucion sql".mysqli_error($conexxion_3)); 

                echo "dato borrado exitosamente";
            } 

            else{ 

                echo"dato no encontrado";

            }
 
            mysqli_close($conexxion_3);

            
        } 

        if(isset($_REQUEST['del'])){ 

            borrar ();


        }
    
    ?>
</body>
</html>
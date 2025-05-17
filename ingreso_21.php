<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingrso 21</title>
</head> 

<?php 

    function ingreso_especial (){  

        $nombre=$_REQUEST['mote']; 
        $correo=$_REQUEST['mail']; 
        $opcion_elegida=$_REQUEST['opcion_curso']; 

        $conectandose=mysqli_connect("localhost","root","","base1")or die("fallo de conexion sql"); 

        $ejecutando1=mysqli_query($conectandose,"insert into alumnos(nombre, mail, codigo_curso) values ('$nombre', '$correo', '$opcion_elegida')")or die("error del comando sql".mysqli_error($conectandose)); 

        if($ejecutando1){ 

            header("Loction: formulaio_ingreso 21.php?tran=true");

        }
    } 

    if(isset($_REQUEST['op'])){
        ingreso_especial ();
    }

?>

<body>
</body>
</html>
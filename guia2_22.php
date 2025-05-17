<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 22</title>
</head> 
<?php 

function impresion_join(){ 

    $codex=$_REQUEST['cod_cod'];  

    $conactarr=mysqli_connect("localhost","root","","base1") or die("error en la conexion");  

    $comando_sql=mysqli_query($conactarr,"select 
    alumnos.nombre, 
    alumnos.mail as 'correo_electronico', 
    alumnos.codigo as 'ID_estudiante', 
    cursos.nombre_curso
    from 
    alumnos inner join cursos on alumnos.codigo_curso = cursos.codigo_g 
    WHERE codigo='$codex'
    ")or die("error en el comando sql".mysqli_error($conactarr));

    while($raw=mysqli_fetch_array($comando_sql)){ 

        echo"nombre = $raw[nombre]"."<br>"; 

        echo"EMAIL = $raw[correo_electronico]"."<br>"; 

        echo"ID = $raw[ID_estudiante]"."<br>"; 

        echo"nombre_curso = $raw[nombre_curso]"."<br>";   

        echo"<hr>"."<br>";


    }
}
if(isset($_REQUEST['hu'])){ 

    impresion_join();

}

?>
<body>
</body>
</html>
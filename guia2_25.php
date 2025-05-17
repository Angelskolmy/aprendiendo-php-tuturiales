<?php 

    function listar_cont (){  

        $inicio=mysqli_connect("Localhost","root","","base1")or die("error en la conexion"); 

        $exucucioner=mysqli_query($inicio,"select 
        cursos.nombre_curso  as nombre_del_curso,
        count(alumnos.codigo_curso) as cantidad_inscritos, 
        alumnos.nombre,  
        cursos.codigo_g as id__curso
        from cursos  
        inner join alumnos on cursos.codigo_g = alumnos.codigo_curso 
        group by cursos.codigo_g, cursos.nombre_curso")or die("error de comando".mysqli_error($inicio)); 

        while($listy=mysqli_fetch_array($exucucioner)){ 

            echo"CURSO= $listy[nombre_del_curso]"."<br>"; 

            echo"Cantidad de inscritos= $listy[cantidad_inscritos]"."<br>"; 

            $executar=mysqli_query($inicio,"select nombre from alumnos WHERE codigo_curso='$listy[id__curso]' ")or die("error de comando".mysqli_error($inicio));  

            while($listart2=mysqli_fetch_array($executar)){ 
                echo"<br>";
                echo"$listart2[nombre]";

            } 
            echo"<hr>";
        }
    } 
    if(isset($_REQUEST['reer'])){ 
        listar_cont ();
    }

?> 

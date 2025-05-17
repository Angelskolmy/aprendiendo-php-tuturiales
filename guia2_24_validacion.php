<?php 

    function update_complejo (){ 

        $Dato_maestro=$_REQUEST['cod_vad'];   

        if($Dato_maestro<1){ 

            header("Location: formulario_24.php?arka=true");
        }

        $conexion_sqli=mysqli_connect("Localhost","root","","base1")or die("error en la conexion"); 

        $comando_primera=mysqli_query($conexion_sqli,"select codigo, nombre,  mail, codigo_curso from alumnos WHERE codigo='$Dato_maestro' ") or die("error en el comando sql".mysqli_error($conexion_sqli)); 

        if($array_1=mysqli_fetch_array($comando_primera)){ 

            $conexion_sqli1=mysqli_connect("Localhost","root","","base1")or die("error en la conexion");
?>          
            <form action="guia_24_ejecucion.php" method="post"> 

                <label>nombre</label><br> 
                <input type="text" name="nombre"> 
                <br><br> 

                <label>email</label><br> 
                <input type="text" name="electronic"> 
                <br><br> 

                <input type="hidden" value="<?php echo"$array_1[codigo]"?>" name="comparador_maestro">
                 
                <?php
                
                    $comando_segunda=mysqli_query($conexion_sqli1,"select codigo_g, nombre_curso from cursos")or die("error comando".mysqli_error($conexion_sqli1));
                ?> 
                <select name="LEGARD"> 
                    <?php 
                        While($lista_select=mysqli_fetch_array($comando_segunda)){

                            if($lista_select['codigo_g']==$array_1['codigo_curso']){

                                echo"<option value='$lista_select[codigo_g]' selected>$lista_select[nombre_curso]</option>";
                            } 
                            else{ 
                                echo"<option value='$lista_select[codigo_g]'>$lista_select[nombre_curso]</option>";
                            }
                        } 
                        mysqli_close($conexion_sqli1);
                    ?>            
                </select> 
                        <br><br>
                <input type="submit" value="UPDATE" name="uroboros">
            </form>
<?php 
        
        }  
        else{ 
            echo"usuario inexistente";
        }
        mysqli_close($conexion_sqli);
    } 
     if($_REQUEST['cod_vad']){ 
        update_complejo();
    }
?>
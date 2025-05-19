<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 32</title>
</head>
<body>
    <form action="formulario_32.php" method="post">

        <label>listar alumnos</label><br> 
        <input type="submit" name="raiker" value="listar">
        <br><br>

    </form> 
    <br><br> 

    <?php      

        require_once("guia3_32.php"); 

        if(isset($_REQUEST['raiker'])){

            retornarConexion();
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 38</title>
</head>
<body>
    <?php 

        $nombre=$_REQUEST['nombre']; 
        $correo=$_REQUEST['tron']; 
        $donacion=$_REQUEST['dineros'];

        printf("Nombre: %s",$nombre);  

        echo"<br>";
        
        printf("correo electronico= %s",$correo);  

        echo"<br>";
      
        printf("Donacion= %05d",$donacion);

    ?>
</body>
</html>
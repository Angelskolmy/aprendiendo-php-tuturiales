<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 

       if (isset($_REQUEST['jjj'])) {
            $string_random = $_REQUEST['jjj'];
            echo "<h2>Código ASCII del texto ingresado:</h2>";
            echo "<pre>";
            for ($i = 0; $i < strlen($string_random); $i++) {
                printf("El carácter '%s' tiene el código ASCII: %d\n", $string_random[$i], ord($string_random[$i]));
            }
        }
    
    ?>
</body>
</html>
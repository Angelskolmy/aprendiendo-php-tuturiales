<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        function UY (){ 

            copy($_FILES['foto1']['tmp_name'],$_FILES['foto1']['name']);
            $varq=$_FILES['foto1']['name']; 

            copy($_FILES['foto2']['tmp_name'],$_FILES['foto2']['name']);
            $varq2=$_FILES['foto2']['name'];  

            copy($_FILES['foto3']['tmp_name'],$_FILES['foto3']['name']);
            $varq3=$_FILES['foto3']['name'];  

            echo"<img src=\"$varq\">"."<br><br>"; 
            echo"<img src=\"$varq2\">"."<br><br>"; 
            echo"<img src=\"$varq3\">"."<br><br>"; 

            echo"<h3>exito</h3>";
        } 
        if(isset($_REQUEST['xd'])){ 

           UY ();
        }

    ?> 
</body>
</html>
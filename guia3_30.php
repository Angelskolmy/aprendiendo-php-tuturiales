<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php  
        $content=0;

        function kaiser(){ 

            $opcion=$_REQUEST['notc']; 

            global $content;

            if($opcion=="deporte"){     

                $content="ULTIMA HORA BARCELONA TRIUNFA SOBRE REAL MADRID";

            } 
            elseif($opcion=="economia"){

                $content="BOLSA DE VALORES EN CAIDA LIBRE, PEOR QUE 2008";

            }
            elseif($opcion=="politica"){

                $content="ULTIMA HORA CAOS POLITICO EN  CONGRESO POR PROYECTO DE LEY";
            } 

            setcookie("notc",$content,time()+60*60*24*365,"/"); 

            header("Location: formulario_30.php?kirsten=true");
        }
        if(isset($_REQUEST['btn12'])){ 

            kaiser();
        } 

        function nilvan(){  

            global $content;

            setcookie("notc",$content,time()-1000,"/"); 

            header("location: formulario_30.php?springer=true");
        } 
        if(isset($_REQUEST['archeros'])){ 
            nilvan();
        }
    
    ?>
</body>
</html>
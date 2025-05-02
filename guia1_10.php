<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gia 10</title>
</head>
<body>
    <?php  

        $ciudad=$_REQUEST['nonbre_C']; 

        $empresa=$_REQUEST['nonbre_emp']; 
        
        $representante=$_REQUEST['nonbre_rep']; 

        $direcion_rep=$_REQUEST['direccion_rep']; 

        $nombre_indiv=$_REQUEST['nonbre_indiv']; 

        $direcion_indiv=$_REQUEST['direcion_indiv'];



        echo"En la ciudad de $ciudad , se acuerda entre la Empresa $empresa <br>
        representada por el Sr. $representante en su carácter de Apoderado,<br>
        con domicilio en la calle $direcion_rep y el Sr. $nombre_indiv,<br>
        futuro empleado con domicilio en $direcion_indiv, celebrar el presente <br>
        contrato a Plazo Fijo, de acuerdo a la normativa vigente de los <br>
        artículos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo<br>
        N° 20.744.";

    ?>
</body>
</html>
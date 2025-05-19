<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 36</title>
</head>
<body>   
    <?php 

        if(isset($_GET['afirmativo'])&& $_GET['afirmativo']){ 
            echo"fehca valida";
        } 

        if((isset($_GET['negativo'])&& $_GET['negativo'])){ 
            echo"fecha invalida";
        }
    
    ?>

    <br><br>
    <form action="guia3_36.php" method="post">  

        <label>dia</label><br> 
        <select name="day"> 
            <option value="1">1</option> 
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option> 
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option> 
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option> 
            <option value="30">30</option> 
            <option value="31">31</option>
            <option value="40">40</option>
        </select> 
        <br><br>  

        <label>Mes</label><br> 
        <select name="month"> 
            <option value="01">enero</option> 
            <option value="02">febrero</option>
            <option value="03">marzo</option>
            <option value="04">abril</option> 
            <option value="05">mayo</option>
            <option value="06">junio</option>
            <option value="07">julio</option>
            <option value="08">agosto</option>
            <option value="09">septiembre</option>
            <option value="10">octubre</option>
            <option value="11">noviembre</option>
            <option value="12">diciembre</option>  
            <option value="14">aljilal</option> 
        </select> 
        <br><br>  

        <label>año</label><br> 
        <input type="number" name="year">
        <br><br>


        <input type="submit" name="rolor" value="comparar">


    </form>
</body>
</html>
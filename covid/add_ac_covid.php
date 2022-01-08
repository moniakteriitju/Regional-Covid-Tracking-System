<?php
include_once 'db_connection.php';
$wi=$_POST['wi'];
$va=$_POST['va'];
$st=$_POST['st'];
$pi=$_POST['pi'];

//echo "$wi "."$va "."$st "."$pi "."$hi";
$qr="insert into covid_ward values('$wi','$va','$st','$pi');";
$res=mysqli_query($cnn,$qr);


?>
<html>
    <head>
        <style>
            table{
                background-color:springgreen;
                color:slateblue;
                font-family:fantasy;
                font-size:large;
                border-radius:20px;


            }
            body{
        background-color:black;
}
            b{
                font-family:Verdana, Geneva, Tahoma, sans-serif;
                font-size:large;
            }
        </style>
    </head>
    <body>
<p align="center">
    <br>
    <br>
    <br>
    <br>
    <br>
    <table border="0" cellpadding="60">
        <tr>
            <td align="center">
                <br>
                <b>SUCCESSFLLY INSERTED !</b><BR>
                <br>
                <br>
                <?php
                header("Location:t_covid.php");
                ?>
                
                <br>

            </td>
        </tr>
    </table>
</p>
    </body>
</html>
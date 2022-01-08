<?php
include_once 'db_connection.php';
$pi=$_POST['pi'];
$pn=$_POST['pn'];
$pa=$_POST['pa'];
$pp=$_POST['pp'];
$age=$_POST['age'];
$bg=$_POST['bg'];
$gn=$_POST['gn'];
$hi=$_POST['hi'];
$di=$_POST['di'];
//echo "$wi "."$va "."$st "."$pi "."$hi";
$qr="insert into patient values('$pi','$pn','$pa','$pp','$age','$bg','$gn','$hi','$di');";
$res=mysqli_query($cnn,$qr);


?>
<html>
    <head>
        <style>
            table{
                background-color:chartreuse;
                color:darkblue;
                font-family:fantasy;
                font-size:large;


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
                header("Location:t_patient.php");
                ?>

                <br>

            </td>
        </tr>
    </table>
</p>
    </body>
</html>
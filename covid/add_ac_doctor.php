<?php
include_once 'db_connection.php';
$di=$_POST['di'];
$dn=$_POST['dn'];
$dp=$_POST['dp'];
$em=$_POST['em'];
$av=$_POST['av'];
$hi=$_POST['hi'];
$wi=$_POST['wi'];
//echo "$wi "."$va "."$st "."$pi "."$hi";
$qr="insert into doctor values('$di','$dn','$dp','$em','$av','$hi','$wi');";
$res=mysqli_query($cnn,$qr);


?>
<html>
    <head>
        <style>
            table{
                background-color:floralwhite;
                color:indigo;
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
                header("Location:t_doctor.php");
                ?>

                <br>

            </td>
        </tr>
    </table>
</p>
    </body>
</html>
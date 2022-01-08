<?php
include_once 'db_connection.php';
$hi=$_GET['hi'];


//echo "$wi "."$va "."$st "."$pi "."$hi";
$qr="delete from hospital where hos_id='$hi'";
$res=mysqli_query($cnn,$qr);


?>
<html>
    <head>
        <style>
            table{
                background-color:khaki;
                color:indigo;
                font-family:fantasy;
                font-size:large;


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
                <b>SUCCESSFLLY DELETED !</b><BR>
                <br>
                <br>
                <?php
                header("Location:t_hospital.php");
                ?>
                <br>

            </td>
        </tr>
    </table>
</p>
    </body>
</html>
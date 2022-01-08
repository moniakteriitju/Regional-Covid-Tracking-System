<?php
include_once 'db_connection.php';
$hi=$_POST['hi'];
$ha=$_POST['ha'];
$hp=$_POST['hp'];
$hn=$_POST['hn'];
$ds=$_POST['ds'];

echo "$hi   "."$ha   "."$hp   "."$hn   "."$ds";
$qr="insert into hospital values('$hi','$hn','$ha','$ds','$hp');";
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
            body{
        background-color:white;
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
                header("Location:t_hospital.php");
                ?>

                <br>

            </td>
        </tr>
    </table>
</p>
    </body>
</html>
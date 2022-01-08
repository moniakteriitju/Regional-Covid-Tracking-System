<?php
include_once 'db_connection.php';
$pi=$_POST['pi'];
$ad=$_POST['ad'];
$rn=$_POST['rn'];

//echo "$wi "."$va "."$st "."$pi "."$hi";
$qr="insert into medical_info values('$pi','$ad','$rn');";
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
                header("Location:t_medical.php");
                ?>

                <br>

            </td>
        </tr>
    </table>
</p>
    </body>
</html>
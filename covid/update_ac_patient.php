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


//echo "$pi "."$pn "."$pa"." $gn "."$age";
$qr="update patient set pat_id='$pi',pat_name='$pn',pat_add='$pa',pat_phn='$pp',age='$age',blood_group='$bg',gender='$gn',hos_id='$hi',doc_id='$di' where pat_id='$pi';";
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
                border-radius:25px;


            }
            body{
        background-color:aliceblue;
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
                <b>SUCCESSFLLY UPDATED !</b><BR>
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
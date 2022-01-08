<?php
include_once 'db_connection.php';
$di=$_POST['di'];
$dn=$_POST['dn'];
$dp=$_POST['dp'];
$em=$_POST['em'];
$av=$_POST['av'];
$hi=$_POST['hi'];
$wi=$_POST['wi'];



//echo "$pi "."$pn "."$pa"."$pp "."$age";
$qr="update doctor set doc_id='$di',doc_name='$dn',doc_phn='$dp',doc_email='$em',availability='$av',hos_id='$hi',ward_id='$wi' where doc_id='$di';";
$res=mysqli_query($cnn,$qr);

if($res)echo "yes";

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
            body{
        background-color:black;
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
                header("Location:t_doctor.php");
                ?>

                <br>

            </td>
        </tr>
    </table>
</p>
    </body>
</html>
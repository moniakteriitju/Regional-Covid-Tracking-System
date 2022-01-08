<?php
include_once 'db_connection.php';
$wi=$_POST['wi'];
$va=$_POST['va'];
$st=$_POST['st'];
$pi=$_POST['pi'];




//echo "$wi "."$va "."$st"."$pi "."$hi";
$qr="update covid_ward set ward_id='$wi',vaccine='$va',status='$st',pat_id='$pi' where pat_id='$pi';";
$res=mysqli_query($cnn,$qr);

//if($res)echo "yes";

?>
<html>
    <head>
        <style>
            table{
                background-color:aqua;
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
                header("Location:t_covid.php");
                ?>

                <br>

            </td>
        </tr>
    </table>
</p>
    </body>
</html>
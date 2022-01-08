<?php
include_once 'db_connection.php';

$di=$_GET['di'];
$dn=$_GET['dn'];
$dp=$_GET['dp'];
$em=$_GET['em'];
$av=$_GET['av'];
$hi=$_GET['hi'];
$wi=$_GET['wi'];

?>
<html>
<head>
<style>
   table{
            background-color:mediumspringgreen;
            border-radius:25px;
            width:30%;
            height: 80%;;
            padding:10px;
    
        }
        body{
        background-color:black;
}
.hv{
    background-color:lightgreen;
    text-align:center;
    border-radius:15px;
    padding:5px;
}
.hv:hover{
    background-color:green;
    text-align:center;
    border-radius:15px;
    padding:5px;
}
th,td{
    text-align:center;
}
</style>
</head>
<body>
<table border="0" align="center" cellpadding="20">
<tr>
<td>
<form method="POST" action="update_ac_doctor.php">
        <label for="di">doctor_id</label><br>
        <input class="hv" type="text" id="di" value=<?php echo $di?> name="di"><br><br>
        <label for="dn"> doctor_name</label><br>
        <input class="hv" type="text" id="dn"value=<?php echo $dn?> name="dn"><br><br>
        <label for="dp">doctor_phone</label><br>
        <input class="hv" type="text"  id="dp"value=<?php echo $dp?> name="dp"><br><br>
        <label for="em">email</label><br>
        <input class="hv" type="text" id="em" value=<?php echo $em?> name="em"><br><br>
        <label for="av"> availability</label><br>
        <input class="hv" type="text" id="av"value=<?php echo $av?> name="av"><br><br>
        <label for="hi">hospital_id</label><br>
        <input class="hv" type="text" id="hi"value=<?php echo $hi?> name="hi"><br><br>
        <label for="wi">ward_id</label><br>
        <input class="hv" type="text" id="wi" value=<?php echo $wi?> name="wi"><br><br>
        
        <input class="hv" type="submit" value="update"><br><br>
        
            
        </form>
        </td>
        </tr>
        </table>


</body>
</html>
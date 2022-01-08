<?php
include_once 'db_connection.php';

$pi=$_GET['pi'];
$pn=$_GET['pn'];
$pa=$_GET['pa'];
$pp=$_GET['pp'];
$age=$_GET['age'];
$bg=$_GET['bg'];
$gn=$_GET['gn'];
$hi=$_GET['hi'];
$di=$_GET['di'];

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
        
<form method="POST" action="update_ac_patient.php">
        <label for="pi">patient_id</label><br>
        <input class="hv" type="text" id="pi" value=<?php echo $pi?> name="pi"><br><br>
        <label for="pn"> oatient_name</label><br>
        <input class="hv" type="text" id="pn"value=<?php echo $pn?> name="pn"><br><br>
        <label for="pa">patient_address</label><br>
        <input class="hv" type="text" id="pa"value=<?php echo $pa?> name="pa"><br><br>
        <label for="pp">patient_phone</label><br>
        <input class="hv" type="text" id="pp" value=<?php echo $pp?> name="pp"><br><br>
        <label for="age"> age</label><br>
        <input class="hv" type="text" id="age"value=<?php echo $age?> name="age"><br><br>
        <label for="bg">blood_group</label><br>
        <input class="hv" type="text" id="bg"value=<?php echo $bg?> name="bg"><br><br>
        <label for="gn">gender</label><br>
        <input class="hv" type="text" id="gn" value=<?php echo $gn?> name="gn"><br><br>
        <label for="hi">hospital_id</label><br>
        <input class="hv" type="text" id="hi"value=<?php echo $hi?> name="hi"><br><br>
        <label for="di">doctor_id</label><br>
        <input class="hv" type="text" id="di"value=<?php echo $di?> name="di"><br><br>
        <input class="hv" type="submit" value="update"><br><br>
        
            
        </form>
        </td>
        </tr>
        </table>


</body>
</html>
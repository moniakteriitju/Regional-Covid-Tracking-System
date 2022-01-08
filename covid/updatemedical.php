<?php
include_once 'db_connection.php';

$pi=$_GET['pi'];
$ad=$_GET['ad'];
$rn=$_GET['rn'];



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
        <br><br><br>
<table border="0" align="center" cellpadding="20">
<tr>
<td>
<form method="POST" action="update_ac_medical.php">
        <label for="pi">patient_id</label><br>
        <input class="hv" type="text" id="pi" value=<?php echo $pi?> name="pi"><br><br>
        <label for="ad"> admit_date</label><br>
        <input class="hv" type="text" id="ad"value=<?php echo $ad?> name="ad"><br><br>
        <label for="rn">room_no</label><br>
        <input class="hv" type="text" id="rn"value=<?php echo $rn?> name="rn"><br><br>
       
       
    
        
        <input class="hv" type="submit" value="update"><br><br>
        
            
        </form>
        </td>
        </tr>
        </table>


</body>
</html>
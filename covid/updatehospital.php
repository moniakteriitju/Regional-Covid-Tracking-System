<?php
include_once 'db_connection.php';

$hi=$_GET['hi'];
$hn=$_GET['hn'];
$ha=$_GET['ha'];
$ds=$_GET['ds'];
$hp=$_GET['hp'];


//echo "$hn";

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
<form method="POST" action="update_ac_hospital.php">
        <label for="hi">Hospital_Id</label><br>
        <input class="hv" type="text" id="hi" value=<?php echo $hi?> name="hi"><br><br>
        <label for="hn"> Hospital_Name</label><br>

        <input class="hv" type="text" id="hn" value=<?php echo $hn;?> name="hn"><br><br>
        <label for="ha"> hospital_address</label><br>
        <input class="hv" type="text" id="ha"value=<?php echo $ha?> name="ha"><br><br>

        <label for="ds">district</label><br>
        <input class="hv" type="text" id="ds"value=<?php echo $ds?> name="ds"><br><br>
        <label for="hp">hospital_phone</label><br>
        <input class="hv" type="text" id="hp"value=<?php echo $hp?> name="hp"><br><br>
       
       
    
        
        <input class="hv" type="submit" value="update"><br><br>
        
            
        </form>
        </td>
        </tr>
        </table>


</body>
</html>
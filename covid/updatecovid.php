<?php
include_once 'db_connection.php';

$wi=$_GET['wi'];
$va=$_GET['va'];
$st=$_GET['st'];
$pi=$_GET['pi'];


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
<form method="POST" action="update_ac_covid.php">
        <label for="wi">ward_id</label><br>
        <input class="hv" type="text" id="wi" value=<?php echo $wi?> name="wi"><br><br>
        <label for="va"> vaccine</label><br>
        <input  class="hv" type="text" id="va"value=<?php echo $va?> name="va"><br><br>
        <label for="st">status</label><br>
        <input  class="hv" type="text" id="st"value=<?php echo $st?> name="st"><br><br>
        <label for="pi">patient_id</label><br>
        <input  class="hv" type="text" id="pi" value=<?php echo $pi?> name="pi"><br><br>

       
    
        
        <input  class="hv" type="submit" value="update"><br><br>
        
            
        </form>
        </td>
        </tr>
        </table>


</body>
</html>
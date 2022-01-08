<!doctype html>
<html>
<head>
    <style>
          table{
            background-color:aliceblue;
            border-radius:25px;
            width:30%;
            height: 80%;;
            padding:10px;
    
        }
        body{
        background-color:springgreen;
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
    <br><br>
    <table border="0" align="center" cellpadding="40"><tr><td>
    <form action="add_ac_medical.php" method="POST">
        <label for="pi">patient_id</label><BR>
        <input class="hv" type="text" id="pi" name="pi"><br><br>
        <label for="ad">admit_date</label><BR>
        <input class="hv" type="text " id="ad" name="ad"><br><br>
        <label for="rn">room_no</label><BR>
        <input class="hv" type="text" id="rn" name="rn"><br><br>
  
       
    
        <input class="hv" type="submit" name="INSERT" value="INSERT">
        <br>
        <p align="right"><a href="t_medical.php">Back</a></p>
    </td>
    </tr>

    </form>
    </table>
</body>
</html>
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

.al{
    text-align:center;
}
    </style>
</head>
<body>
    <br>
    
    <table border="0" align="center" cellpadding="10"><tr><td>
    <form class="al" action="add_ac_covid.php" method="POST">
        <label for="wi">Ward_id</label><br>
        <input class="hv" type="text" id="wi" name="wi"><br><br>
        <label for="va">Vaccine</label><br>
        <input class="hv" type="text " id="va" name="va"><br><br>
        <label for="st">Status</label><br>
        <input class="hv" type="text" id="st" name="st"><br><br>
        <label for="pi">Patient_id</label><br>
        <input class="hv" type="text" id="pi" name="pi"><br><br>
        
    
        <input class="hv" type="submit" name="INSERT" value="INSERT">
        <br>
        <p align="center"><a href="t_covid.php">Back</a></p>
    </td>
    </tr>

    </form>
    </table>
</body>
</html>
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


td,th{
    text-align:center;
}
.al{
    text-align:center;
}
    </style>
</head>
<body>
    <table border="0" align="center" cellpadding="20"><tr><td>
    <form action="add_ac_doctor.php" method="POST">
        <label for="di">Doctor_id</label><BR>
        <input class="hv" type="text" id="di" name="di"><br><br>
        <label for="dn">Doctor_name</label><BR>
        <input class="hv" type="text " id="dn" name="dn"><br><br>
        <label for="dp">Doctor_phone</label><BR>
        <input class="hv" type="text" pattern="[0-9]{11}" id="dp" name="dp"><br><br>
        <label for="em">Email</label><BR>
        <input class="hv" type="text" id="em" name="em"><br><br>
        <label for="av">Availability</label><BR>
        <input class="hv" type="text" id="av" name="av"><br><br>
        <label for="hi">Hospital_id</label><BR>
        <input class="hv" type="text" id="hi" name="hi"><br><br>
        <label for="wi">Ward_id</label><BR>
        <input class="hv" type="text" id="wi" name="wi"><br><br>
    
        <input class="hv" type="submit" name="INSERT" value="INSERT">
        <br>
        <p align="right"><a href="all_tables.php">Back</a></p>
    </td>
    </tr>

    </form>
    </table>
</body>
</html>
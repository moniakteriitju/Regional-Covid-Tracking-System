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
    <table border="0" align="center" cellpadding="50">
        <tr>
            <td>
                <form action="add_ac_patient.php" method="POST">
                    <div class="al">
                        <label for="pi">patient_id</label><BR>
                        <input class="hv" type="text" id="pi" name="pi"><br>
                        <label for="pn">patient_name</label><BR>
                        <input class="hv" type="text " id="pn" name="pn"><br>
                        <label for="pa">patient_address</label><BR>
                        <input class="hv" type="text" id="pa" name="pa"><br>
                        <label for="pp">patient_phone</label><BR>
                        <input class="hv" pattern=[+]{1}[8]{2}[0-9]{11} value="<?php echo '+880'?>" type="text" id="pp" name="pp"><br>
                        <label for="age">age</label><BR>
                        <input class="hv" type="text" id="age" name="age"><br>
                        <label for="bg">blood_group</label><BR>
                        <input class="hv" type="text" id="bg" name="bg"><br>
                        <label for="gn">gender</label><BR>
                        <input class="hv" type="text" id="gn" name="gn"><br>
                        <label for="hi">hospital_id</label><BR>
                        <input class="hv" type="text" id="hi" name="hi"><br>
                        <label for="di">doctor_id</label><BR>
                        <input class="hv" type="text" id="di" name="di"><br><br>

                        <input class="hv" type="submit" name="INSERT" value="INSERT">
                        <br>
                        <p align="center"><a href="t_patient.php">Back</a></p>
                    </div>
            </td>
        </tr>



        </form>
    </table>
</body>

</html>
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

        .al {
            text-align: center;
            font-size:larger;
        }
    </style>
</head>

<body>
    <br><br>
    <table border="0" align="center" cellpadding="20">
        <tr>
            <td>
                <form action="add_ac_hospital.php" method="POST">
                    <div class="al"><label for="hi">hospital_id</label><BR>
                        <input class="hv" type="text" id="hi" name="hi"><br><br>

                        <label for="hn">hospital_name</label><BR>
                        <input class="hv" type="text" id="hn" name="hn"><br><br>
                        <label for="ha">hospital_address</label><BR>
                        <input class="hv" type="text " id="ha" name="ha"><br><br>

                        <label for="ds">district</label><BR>
                        <input class="hv" type="text " id="ds" name="ds"><br><br>
                        <label for="hp">hospital_phn</label><BR>
                        <input class="hv" type="text" id="hp" name="hp"><br><br>



                        <input class="hv" type="submit" name="INSERT" value="INSERT">
                        <br>
                        <p align="right"><a href="t_hospital.php">Back</a></p>
            </td>
        </tr>
        </div>


        </form>
    </table>
</body>

</html>
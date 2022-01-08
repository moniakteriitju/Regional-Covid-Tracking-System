<?php
include_once 'db_connection.php';
?>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="doctor_page.css">
<style>
body{
    background-color:darkcyan;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color:blue;
    
}
.inp{
    
    padding:3px;
    font-size: large;
    color:darkblue;
    background-color:white;
    border-radius:7px;
    text-decoration: none;
}
.inp:hover{
    color:white;
    background-color:darkblue;
    border-radius:7px;

}
.mydiv{
    text-align:center;
    background-color:aliceblue;
    padding:10px 50px;
    border-radius:10px;

}
td,th{
    padding:3px;
    text-align:center;
    
}
table{
    text-align:center;
    height:15%;
    border-spacing:5px;
    width:100%;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}
.ln{
    background-color:white;
text-align:center;
font-size:larger;
    padding:25px;

}
.aa{
    color:darkblue;
    text-decoration: none;

}
.aa:hover{
    color:white;
    background-color:darkblue;
    border-radius:3px;
    

}
a{
    text-decoration:none;
    color:white;
    font-weight: bolder;
}
.ll{
    background-color:darkblue;
    width:50%;
    text-align:center; padding:10px;
    border-radius:5px;
    margin:auto;
}
.ll:hover{
    background-color:black;
    width:50%;
    text-align:center; padding:10px;
    border-radius:5px;
    margin:auto;
}

</style>
<link rel="stylesheet" href="nav_style.css">
</head>

<header>
        <ul>
            <li><a href="about.php">ABOUT US</a></li>
            <li class="active"><a href="adminlog.php">ADMIN LOGIN</a></li>
            <li ><a href="doctorlog.php">DOCTOR LOGIN</a></li>
            <li> <a href="userlog.php">USER </a></li>
            <li><a href="home_page.php">HOME</a></li>
        </ul>
    </header>

    <?php
    

//MEDICAL_INFO............................
            
$qr="select * from medical_info;";
$res=mysqli_query($cnn,$qr);
$nr=mysqli_num_rows($res);
if($nr>0)
{
    ?>
    
  
    <br><br>
    <div class="p4">
    <div class="bb">
        <div class="mydiv">
    <h2>MEDICAL_INFO</h2>
    <table border="2">
    <tr><th>pat_id</th><th>admit_date</th><th>room_no</th><th colspan="2">operation</th></tr>
    <?php
    while($rr=mysqli_fetch_assoc($res))
    {
  echo "<tr><td>".$rr['pat_id']."</td><td>".$rr['admit_date']."</td><td>".$rr['room_no'].
  "</td><td><a class='aa' href='deletemedical.php?pi=$rr[pat_id]'>delete</a></td>
  <td><a class='aa' href='updatemedical.php?pi=$rr[pat_id] & ad=$rr[admit_date] & rn=$rr[room_no]'>update</a></td>
  </tr>";

    }
    ?>
    </table><br>
    <form action="add_medical.php" method="POST">
    <input class="inp" type="submit" value="INSERT">
    </form>
</div>
</div>
</div>
<div class="ll"><a href="admin.php">Go back</a></div>
    <br><br>
    <?php


}




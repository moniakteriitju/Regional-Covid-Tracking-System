<?php
include_once 'db_connection.php';
$hi=$_POST['hi'];
$id=$_POST['id'];
?>
<html>
    <head>
        <link rel="stylesheet" href="doctor_page.css">
        <style>
        body
            {
                background-color:gray;

            }
            .ds{
                background-color:darkslateblue;
                text-align:center;
                width:75%;
                margin:auto;
                padding:25px;
                color:white;
                border-radius:5px;
            }
            .ds:hover{
                background-color:indigo;
                text-align:center;
                width:75%;
                border:3px solid maroon;
                margin:auto;
                padding:25px;
                color:white;
                border-radius:5px;
            }

            .ds2{
                background-color:darkgreen;
                text-align:center;
                width:75%;
                margin:auto;
                padding:25px;
                color:white;
                border-radius:5px;
            }
            .ds3{
                background-color:darkblue;
                color:cyan;
                text-align:center;
                width:50%;
                margin:auto;
                color:white;
                padding:10px;
                border-radius:5px;
                font-size: larger;
            }
            .ds3:hover{
                background-color:black;
                color:cyan;
                text-align:center;
                width:50%;
                margin:auto;
                color:white;
                padding:10px;
                border-radius:5px;
                font-size: larger;
            }

            a{
                text-decoration:none;
                color:white;
            }
            table{
            width:50%;
            
            }
            th,td{
                text-align:center;
                padding:5px;
                color:white;
            }
            </style>
            <link rel="stylesheet" href="nav_style.css">
    </head>
</html>

<header>
        <ul>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="adminlog.php">ADMIN LOGIN</a></li>
            <li  class="active"><a href="doctorlog.php">DOCTOR LOGIN</a></li>
            <li> <a href="wel_user.php">USER </a></li>
            <li><a href="home_page.php">HOME</a></li>
        </ul>
    </header>
    <br><br>
<?php


$qr="select * from patient inner join covid_ward using(pat_id) where hos_id='$hi';";
$res=mysqli_query($cnn,$qr);

$nr=mysqli_num_rows($res);

?>

<div class="ds">
<h1> Patient Details In Hospital (ID- <?php echo " $hi"?>)</h1>
<table border="2" style="color:black" align="center">
<tr><th>pat_id</th><th>ward_id</th><th>status</th><th>vaccine</th></tr>
    

    
   
    <?php
    if($nr>0){
    while($rr=mysqli_fetch_assoc($res))
    {
  echo "<tr><td>".$rr['pat_id']."</td><td>".$rr['ward_id']."</td><td>".$rr['status']."</td><td>".$rr['vaccine'].
  "</td>
  
  </tr>";
    }

    
    
    }
    ?>
    </table>
    </div>

    <br>
    <br>
<div class="ds">
   <h1>OTHER OVERVIEWS:</h1>

    <?php

$qr="select count(pat_id) as 'ans' from covid_ward inner join patient using(pat_id) where (hos_id='$hi' and status='cure');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div>
    Total Number of cured Patient in Your Hospital<?php echo" $pp<br>";?>
</div><br>
<?php


//********************************************************** */
$qr="select count(pat_id) as 'ans' from covid_ward inner join patient using(pat_id) where (hos_id='$hi' and status='under treatment');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div>
    Total Number of Patient who are under treatment in Your Hospital<?php echo" $pp<br>";?>
</div><br>
<?php

//****************************************************** */



$qr="select count(pat_id) as 'ans' from covid_ward inner join patient using(pat_id) where (hos_id='$hi' and status='dead');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div>
    Total Number of Dead Patient in Your Hospital<?php echo" $pp<br>";?>
</div><br>
<?php


//**************************************************** */
$qr="select count(pat_id) as 'ans' from covid_ward inner join patient using(pat_id) where (hos_id='$hi' and vaccine='yes');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div>
    Total Number of Patient in Your Hospital who are given vaccine <?php echo" $pp<br>";?>
</div>
<br>
<?php

//************************************************** */



$qr="select count(pat_id) as 'ans' from patient where hos_id='$hi';";
$res=mysqli_query($cnn,$qr);

$data=mysqli_fetch_assoc($res);
$pq=$data['ans'];

$qr="select count(pat_id) as 'ans' from patient inner join covid_ward using (pat_id) where hos_id='$hi';";
$res=mysqli_query($cnn,$qr);

$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];



$vb=$pq-$pp;
?>
<div>
    Total Number of Patient who are admitted in your hospital but they are nor covid affected <?php echo" $vb<br>";?>
</div>
</div>
<br>
<br>

<?php
 echo "<div class='ds3'><a href='doctor.php?id=$id'>Go Back</a></div>";

?>
<br><br>

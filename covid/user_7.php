<html>
    <head>
    <style>
        body
            {
                background-color:darkcyan;

            }
            .ds{
                background-color:darkslategray;
                color:white;
                text-align:center;
                width:70%;
                margin:auto;
                padding:25px;
                border-radius:15px;
            }
            a{
                text-decoration: none;
                color:white;
            }

            .ds3{
                background-color:darkblue;
                text-align:center;
                width:50%;
                text-decoration: none;;
                margin:auto;
                padding:10px;
                border-radius:3px;
                font-weight: bolder;
            }
                .ds3:hover{
                background-color:black;
                text-align:center;
                width:50%;
                text-decoration: none;;
                margin:auto;
                padding:10px;
                border-radius:3px;
                font-weight: bolder;
            }


            .ds2{
                background-color:darkslategray;
                color:white;
                text-align:center;
                width:75%;
                margin:auto;
                padding:15px;
                border-radius:5px;
            
            }
            table{
            width:100%;
            
            }
            th,td{
                color:white;
                text-align:center;
            }
            </style>
            <link rel="stylesheet" href="nav_style.css">
    </head>
</html>
<header>
        <ul>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="adminlog.php">ADMIN LOGIN</a></li>
            <li ><a href="doctorlog.php">DOCTOR LOGIN</a></li>
            <li class="active"><a href="wel_user.php">USER </a></li>
            <li><a href="home_page.php">HOME</a></li>
        </ul>
    </header><br>



<?php
include_once 'db_connection.php';
$hi=$_POST['gn'];
?>

<div class="ds2">
   <h1> Overviews of <?php echo "$hi "?>Patient</h1>
  

<?php


$qr="select count(distinct pat_id) as 'ans' from ((covid_ward inner join patient using(pat_id))) where gender='$hi';";

$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>

<div>
Total Number of Patient<?php echo" : $pp<br>";?>
</div><br>
<?php


//********************************************************** */
$qr="select count(distinct pat_id) as 'ans' from ((covid_ward inner join patient using(pat_id))) where (gender='$hi' and status='under treatment');";

$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div>
Total Number of Patient who are under treatment <?php echo" : $pp<br>";?>
</div><br>
<?php

//****************************************************** */


$qr="select count(distinct pat_id) as 'ans' from ((covid_ward inner join patient using(pat_id))) where (gender='$hi' and status='cure');";


$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div>
Total Number of cured Patient <?php echo" : $pp<br>";?>
</div><br>
<?php


//********************************************************** */
$qr="select count(distinct pat_id) as 'ans' from ((covid_ward inner join patient using(pat_id))) where (gender='$hi' and status='dead');";

$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div>
Total Number of dead Patient <?php echo" : $pp<br>";?>
</div><br>
<?php



//**************************************************** */
$qr="select count(distinct pat_id) as 'ans' from ((covid_ward inner join patient using(pat_id))) where (gender='$hi' and vaccine='yes');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div>
Total Number of Patient given vaccine <?php echo" : $pp<br>";?>
</div>
<br>
<?php

//************************************************** */



//**************************************************** */
$qr="select count(distinct pat_id) as 'ans' from ((covid_ward inner join patient using(pat_id))) where (gender='$hi' and vaccine='no');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div>
Total Number vaccine needed <?php echo" : $pp<br>";?>
</div>
        </div>
<br>
<?php




?>
<div class="ds3"><a href="userlog.php">GO BACK</a></div>
<?php
include_once 'db_connection.php';
$ag=$_POST['ag'];
$bg=$ag-9;
//echo $bg;
?>
<html>
    <head>
    <style>
        table{
            background-color:white;
            color:black;
            width:70%;
        
        }
        body{
            background-color:darkcyan;
        }
        h1{
            text-align:center;
        }
        .inp{
            border-radius:5px;
            background-color:lightgreen;
            padding:5px;
        }
        .us{
            width:75%;
            margin:auto;
            text-align:center;
            background-color:azure;
            border-radius:20px;
            padding:40px;
            font-weight: bolder;
            font-family: 'Times New Roman', Times, serif;
        }
        .ds3{
                background-color:darkblue;
                color:cyan;
                text-align:center;
                width:50%;
                margin:auto;
                padding:10px;
                border-radius:3px;
                font-weight: bolder;
            }
            .ds3:hover{
                background-color:black;
            }
        .bc{
            
            padding:5px;
            text-align:center;
            font-weight: bolder;
            width:50%;
            margin:auto;
          
           

        }
        a{
            text-decoration:none;
    display:block;
    color:white;

        }
        a:hover{
    background-color:black;
    
    color:white;
        }
        th,td{
            padding:5px;
        }
        .res1{
            background-color:darkslategrey;
            color:white;
            text-align: center;
            width:50%;
            margin:auto;
            padding:25px;
            font-size: large;
            border-radius:5px;
        }
    </style>
    <link rel="stylesheet" href="nav_style.css">
    </head>
    <header>
        <ul>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="adminlog.php">ADMIN LOGIN</a></li>
            <li ><a href="doctorlog.php">DOCTOR LOGIN</a></li>
            <li class="active"><a href="wel_user.php">USER </a></li>
            <li><a href="home_page.php">HOME</a></li>
        </ul>
    </header>
    <body>
        <br>
<?php
$qr="select count(pat_id) as 'ans' from patient inner join covid_ward using(pat_id) where (age>='$bg' and age<='$ag');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div class="res1">
Total patient <?php echo" : $pp<br>";?>
</div>
<br>
<?php
//****************************************************************************************************** */
?>


<?php
$qr="select count(pat_id) as 'ans' from patient inner join covid_ward using(pat_id) where ((age>='$bg' and age<='$ag')and gender='male');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div class="res1">
    <h1>Male Patient Overview </h1>
Total Male patient <?php echo" : $pp<br>";?>


<?php

//****************************************************************************************************** */
?>


<?php
$qr="select count(pat_id) as 'ans' from patient inner join covid_ward using(pat_id) where ((age>='$bg' and age<='$ag')and gender='male' and status='cure');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>

    
Cured Male patient <?php echo" : $pp<br>";?>








<?php

//****************************************************************************************************** */
?>


<?php
$qr="select count(pat_id) as 'ans' from patient inner join covid_ward using(pat_id) where ((age>='$bg' and age<='$ag')and gender='male' and status='under treatment');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>

    
Under Treatment Male patient <?php echo" : $pp<br>";?>






<?php

//****************************************************************************************************** */
?>


<?php
$qr="select count(pat_id) as 'ans' from patient inner join covid_ward using(pat_id) where ((age>='$bg' and age<='$ag')and gender='male' and status='dead');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>

    
Dead Male patient <?php echo" : $pp<br>";?>
</div>
<br>






















<?php
//****************************************************************************************************** */
?>


<?php
$qr="select count(pat_id) as 'ans' from patient inner join covid_ward using(pat_id) where ((age>='$bg' and age<='$ag')and gender='female');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>
<div class="res1">
    <h1>Female Patient Overview </h1>
Total female patient <?php echo" : $pp<br>";?>


<?php

//****************************************************************************************************** */
?>


<?php
$qr="select count(pat_id) as 'ans' from patient inner join covid_ward using(pat_id) where ((age>='$bg' and age<='$ag')and gender='female' and status='cure');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>

    
Cured Female patient <?php echo" : $pp<br>";?>








<?php

//****************************************************************************************************** */
?>


<?php
$qr="select count(pat_id) as 'ans' from patient inner join covid_ward using(pat_id) where ((age>='$bg' and age<='$ag')and gender='female' and status='under treatment');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>

    
Under Treatment Female patient <?php echo" : $pp<br>";?>






<?php

//****************************************************************************************************** */
?>


<?php
$qr="select count(pat_id) as 'ans' from patient inner join covid_ward using(pat_id) where ((age>='$bg' and age<='$ag')and gender='female' and status='dead');";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pp=$data['ans'];
?>

    
Dead Female patient <?php echo" : $pp<br>";?>
</div>
<br>

<div class="ds3"><a href="userlog.php">GO BACK</a></div>

    </body>
<?php
include_once 'db_connection.php';
?>
    
<!doctype html>
<html>
<head>
    <style>
        table{
            background-color:white;
            color:black;
            width:100%;
            border-radius:10px;
        
        }
        body{
            background-color:lightslategray;
            text-align:center;
        }
        h1{
            text-align:center;
        }
       
        .us{
            width:70%;
            margin:auto;
            text-align:center;
            background-color:darkslategrey;
            border-radius:5px;
            padding:20px;
            color:white;
            font-family: 'Times New Roman', Times, serif;
        }

        .us:hover{
            width:70%;
            margin:auto;
            text-align:center;
            background-color:maroon;
            border-radius:5px;
            color:white;
            padding:20px;
            font-family: 'Times New Roman', Times, serif;
        }


        th,td{
            text-align:center;
            padding:5px;
        }
        #parent{
            display:flex;
            justify-content:space-evenly;

        }
        #left{
            border-radius:10px;
            background-color:white;
            height: 75%;
            width:45%;
            
            padding:10px;
            text-align:center;
        }
        #right{
            border-radius:10px;
            background-color:white;
            height: 75%;
            width:45%;
            
            padding:10px;
            text-align:center;
           
        }


.ins{
    background-color:blue;
    color:white;
    width:80%;
    height: 20%;
    text-align:center;
    margin:auto;
    padding:5px;
    border-radius:6px;
}
.ins:hover{
    background-color:black;
    color:white;
    width:100%;
    height: 100%;
    text-align:center;
    margin:auto;
    padding:5px;
    border-radius:6px;
}
a.ds3{
    text-decoration:none;
    padding:10px;
    width:65px;
    text-align:center;
    background-color:seagreen;
    color:white;
    margin:auto;
}
a.ds3:hover{
    text-decoration:none;
    padding:10px;
    width:65px;
    text-align:center;
    background-color:darkblue;
    color:white;
    margin:auto;
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
    <br><br>
    <a class="ds3" href="wel_user.php">GO BACK</a>
    <br><br>
    <div class="us">
    <h2> Over All Result For This Region</h2>
  <?php  
   
  
  
  //****************************************************************** ********************/

  $qr="select count(pat_id) as 'ans' from covid_ward;";
  $res=mysqli_query($cnn,$qr);
  $data=mysqli_fetch_assoc($res);
  $pq=$data['ans'];
  
  ?>
  <div>
      Total Covid_19 Patient <?php echo" : $pq<br><br>";?>
  </div>
  <?php


//************************************************************************************************************** */




$qr="select count(pat_id) as 'ans' from covid_ward where status='under treatment';";
  $res=mysqli_query($cnn,$qr);
  $data=mysqli_fetch_assoc($res);
  $pq=$data['ans'];
  
  ?>
  <div>
      Total Patient currently Under Treatment <?php echo" : $pq<br><br>";?>
  </div>
  <?php
  //***************************************************************************************************** */

  $qr="select count(pat_id) as 'ans' from covid_ward where status='cure';";
  $res=mysqli_query($cnn,$qr);
  $data=mysqli_fetch_assoc($res);
  $pq=$data['ans'];
  
  ?>
  <div>
      Total cured Patient <?php echo" : $pq<br><br>";?>
  </div>
  <?php
  //****************************************************************************************************** */



  $qr="select count(pat_id) as 'ans' from covid_ward where status='dead';";
  $res=mysqli_query($cnn,$qr);
  $data=mysqli_fetch_assoc($res);
  $pq=$data['ans'];
  
  ?>
  <div>
      Total Dead Patient <?php echo" : $pq<br><br>";?>
  </div>
  <?php
  //*************************************************************************************************** */


  $qr="select count(pat_id) as 'ans' from covid_ward where vaccine='yes';";
  $res=mysqli_query($cnn,$qr);
  $data=mysqli_fetch_assoc($res);
  $pq=$data['ans'];
  
  ?>
  <div>
      Total Patient who Taken Vaccine <?php echo" : $pq<br><br>";?>
  </div>
  <?php

//************************************************************************************************** */


$qr="select count(pat_id) as 'ans' from covid_ward where vaccine='no';";
$res=mysqli_query($cnn,$qr);
$data=mysqli_fetch_assoc($res);
$pq=$data['ans'];

?>
<div>
    Total Vaccine Needed <?php echo" : $pq<br><br>";?>
</div>
    </div>
<?php



  //**************************************************************************************************** */





$qr="select hos_name,hos_add,hos_phn,count(pat_id) as 'num_of_recovery' from (patient inner join covid_ward using(pat_id)) inner join hospital using(hos_id) where status='cure' group by hos_id order by count(pat_id) desc;";
$res=mysqli_query($cnn,$qr);
$nr=mysqli_num_rows($res);

?>
<br><br>
    <div class="us">
    <h1>Top 5 Hospital Having Maximum Covid Recovery</h1>


<table border="2" align="center">
    <tr><th>hos_name</th><th>hos_add</th><th>hos_phn</th><th>num_of_recovery</th></th></tr>
    <?php
    //echo $nr;
    $cnt=0;


    
    while($rr=mysqli_fetch_assoc($res))
    {
  echo "<tr><td>".$rr['hos_name']."</td><td>".$rr['hos_add']."</td><td>".$rr['hos_phn']."</td><td>".$rr['num_of_recovery']."</td>
  
  </tr>";
  $cnt++;
if($cnt>5)break;

    }
    ?>
    </table>
</div>
    

  
    <?php
    
    //echo "total number of cured patient= $nr<br>";
    ?>
   
    
    <?php

  ?>  




<?php   
  
  
  //****************************************************************** ********************/




$qr="select district,count(pat_id) as 'num_of_covid_patient' from (patient inner join covid_ward using(pat_id))inner join hospital using(hos_id) group by hos_add order by count(pat_id) desc;";
$res=mysqli_query($cnn,$qr);
$nr=mysqli_num_rows($res);
$cnt=0;

?>
<br><br>
<div class="us">
    <h1>Top 5 District Having Maximum Covid patient</h1>

<table border="2" align="center">
    <tr><th>District</th><th>num_of_covid_patient</th></tr>
    <?php
    //echo $nr;


    
    while($rr=mysqli_fetch_assoc($res))
    {
  echo "<tr><td>".$rr['district']."</td><td>".$rr['num_of_covid_patient']."</td>
  
  </tr>";
$cnt++;
if($cnt>5)break;

    }
    ?>
    </table>
    
</div>
  
    <?php
    
    //echo "total number of cured patient= $nr<br>";
    ?>
   
    <br><br>
    <?php

  ?> 





<?php   
  
  
  //****************************************************************** ********************/




$qr="select hos_name,hos_add,hos_phn,count(pat_id) as 'vaccine_taken' from (patient inner join covid_ward using(pat_id)) inner join hospital using(hos_id) where vaccine='yes' group by hos_id order by count(pat_id);";
$res=mysqli_query($cnn,$qr);
$nr=mysqli_num_rows($res);
$cnt=0;

?>
<div class="us">

    <h1>Total Number of Patient Who have Taken vaccine In Each Hospital</h1>

<table border="2" align="center">
    <tr><th>hos_name</th><th>hos_add</th><th>hos_phn</th><th>vaccine_taken</th></tr>
    <?php
    //echo $nr;


    
    while($rr=mysqli_fetch_assoc($res))
    {
  echo "<tr><td>".$rr['hos_name']."</td><td>".$rr['hos_add']."</td><td>".$rr['hos_phn']."</td><td>".$rr['vaccine_taken']."</td>
  
  </tr>";


    }
    ?>
    </table>
    
</div>
  
    <?php
    
    //echo "total number of cured patient= $nr<br>";
    ?>
  
    <br><br>
  
    <?php

  ?>
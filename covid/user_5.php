<?php
include_once 'db_connection.php';
$hi=$_POST['dn'];
?>
<html>
    <head>
    <style>
        body
            {
                background-color:darkcyan;

            }
            .ds2{
                background-color:darkslategray;
                text-align:center;
                width:75%;
                margin:auto;
                color:white;
                padding:25px;
                border-radius:5px;
            }

            .ds{
                background-color:lightgreen;
                text-align:center;
                width:70%;
                margin:auto;
                padding:45px;
                border-radius:15px;
                font-weight:bolder;
            }
            a{
                text-decoration:none;
                color:white;
            }
            .ds3{
                background-color:darkblue;
                color:white;
                text-decoration: none;
                text-align:center;
                width:50%;
                margin:auto;
                padding:15px;
                border-radius:3px;
                
                text-decoration: none;
            }

            .ds3:hover{
                background-color:black;
                color:white;
            text-decoration:none;
                text-align:center;
                width:50%;
                margin:auto;
                padding:15px;
                border-radius:3px;
                
            }


            table{
            width:100%;
            
            }
            th,td{
                text-align:center;
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
            <li ><a href="doctorlog.php">DOCTOR LOGIN</a></li>
            <li class="active"><a href="wel_user.php">USER </a></li>
            <li><a href="home_page.php">HOME</a></li>
        </ul>
    </header>

<?php


$qr="select * from doctor where hos_id=(select hos_id from doctor where doc_id='$hi');";
$res=mysqli_query($cnn,$qr);
$nr=mysqli_num_rows($res);

?>
<br><br><br>
<div class="ds2">
<h2>Doctor's Details Who Works In The Same Hospital As our Searched Docotr Does:</h2>
<table border="2" align="center">
<tr><th>doc_name</th><th>doc_phn</th><th>email</th><th>availability</th></tr>
    

    
   
    <?php
    if($nr>0){
    while($rr=mysqli_fetch_assoc($res))
    {
  echo "<tr><td>".$rr['doc_name']."</td><td>".$rr['doc_phn']."</td><td>".$rr['doc_email']."</td><td>".$rr['availability'].
  "</td>
  
  </tr>";
    }

    
    
    }
    ?>
    </table>
    </div>
    <br>
<div class="ds3"><a href="userlog.php">Go Back</a></div>
    <br>
    <br>

   
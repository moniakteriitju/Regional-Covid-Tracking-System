<?php
include_once 'db_connection.php';
$hi=$_POST['hi'];
?>
<html>
    <head>
    <style>
        table{
    
            width:100%;
        
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
            background-color:darkslategray;
            border-radius:5px;
            padding:40px;
            color:white;
            font-family: 'Times New Roman', Times, serif;
        }
        .ds3{
                background-color:darkblue;
                color:white;
            
                text-align:center;
                width:50%;
                margin:auto;
                padding:15px;
                border-radius:3px;
                font-weight: bolder;
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
                font-weight: bolder;
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
            color:white;
            text-align:center;
        }
    </style>
    <link rel="stylesheet" href="nav_style.css">
    </head>
</html>


<?php



$qr="select * from doctor inner join hospital using(hos_id) where hos_name='$hi';";
$res=mysqli_query($cnn,$qr);
$nr=mysqli_num_rows($res);

?>
<header>
        <ul>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="adminlog.php">ADMIN LOGIN</a></li>
            <li ><a href="doctorlog.php">DOCTOR LOGIN</a></li>
            <li class="active"><a href="wel_user.php">USER </a></li>
            <li><a href="home_page.php">HOME</a></li>
        </ul>
    </header>
    <br><br>
  
<br>


<div class="us">
<h2> Doctor's details who Are Available In hospital (Name- <?php echo " $hi"?>)</h2>
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
    <BR>

    <br>
    <div class="ds3"><a href="userlog.php">GO BACK</a></div>
    <br>
 

   
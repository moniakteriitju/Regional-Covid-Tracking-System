<?php
include_once 'db_connection.php';
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="doctor_page.css">
<link rel="stylesheet" href="nav_style.css">
<style>
body{

    background-color:darkgray;
    background-image: url('bc5.PNG');
    background-repeat: no-repeat;
  background-size:cover;
    
    
}
img {
  border-radius: 2%;
}
input{
    border-radius: 25px;
    color:darkgreen;
    background-color:white;
    font-size:large;
    font-family:inherit;
    padding:8px;

}
input:hover{
    color:white;
 background-color:rgb(20, 185, 20);
    border-radius:8px;
    border-radius: 25px;
}
h1{
    color:white;
    
}
.bd{
   
    font-family:inherit;
    font-weight:900;
   font-size:xx-large;
}
</style>
</head>


<header>
<ul>
<li ><a href="about.php">ABOUT US</a></li>
<li><a href="adminlog.php">ADMIN LOGIN</a></li>
<li><a href="doctorlog.php">DOCTOR LOGIN</a></li>
<li><a href="wel_user.php">USER</a></li>
<li class="active"><a href="home_page.php">HOME</a></li>
</ul>
</header>
<body>
<br><br><br><br>

<?php
//<p align="center"><img src="c3.PNG" hight="100" width="250"></p>   
?>
 <div class="bd"><h1><p align="center">REGIONAL<br>COVID-TRACKING SYSTEM</p></h1></div>


</body>

</html>

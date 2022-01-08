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
            width:50%;
            border-radius:10px;
        
        }
        body{
            background-color:darkgray;
            text-align:center;
        
        }
        h1{
            text-align:center;
        }
        .inp{
            border-radius:5px;
            background-color:lightgreen;
            padding:5px;
            text-align:center;
        }
        .inp:hover{
            border-radius:5px;
            background-color:forestgreen;
            padding:5px;
            color:white;
            text-align:center;
        }
        .us{
            width:95%;
            margin:auto;
            text-align:center;
            background-color:azure;
            border-radius:20px;
            padding:10px;
            font-weight: bolder;
            font-family: 'Times New Roman', Times, serif;
        }

        .us:hover{
            width:95%;
            margin:auto;
            text-align:center;
            background-color:lightcyan;
            border-radius:20px;
            padding:10px;
            font-weight: bolder;
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


        #left:hover{
            border-radius:10px;
            background-color:lightcyan;
            height: 75%;
            width:45%;
            
            padding:10px;
            text-align:center;
        }
        #right:hover{
            border-radius:10px;
            background-color:lightcyan;
            height: 75%;
            width:45%;
            
            padding:10px;
            text-align:center;
           
        }


.ins{
    background-color:darkgray;
    color:black;
    width:80%;
    height: 20%;
    text-align:center;
    margin:auto;
    padding:5px;
    border-radius:6px;
}
.ins:hover{
    background-color:teal;
    color:white;
    width:100%;
    height: 100%;
    text-align:center;
    margin:auto;
    padding:5px;
    border-radius:6px;
}
.out{
    padding:40px;
}
a{
    text-decoration:none;
    color:white;
}
.ds3{
    text-decoration:none;
    padding:10px;
    width:50%;
    text-align:center;
    background-color:darkblue;
    color:white;
    margin:auto;
    border-radius:3px;
}
.ds3:hover{
    text-decoration:none;
    padding:10px;
    width:50%;
    text-align:center;
    background-color:black;
    color:white;
    margin:auto;
    border-radius:3px;
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
    <body><br>

  <div class="out">
  <div id="parent">
      <div id="left">

<div class="ins">

<h3>Enter Hospital Name To See Available Doctors Working There</h3><br>

<form action="user_4.php" method="POST">
    <label for="hi"> ENTER HOSPITAL NAME </label><br>
    <input class="inp" type="text" id="hi" name="hi" ><br>
    <input class="inp" type="submit" value="See Result" name="submit">

</form>
</div>
</div>

<div id="right">
<div class="ins">
<h3>See Doctors Info Working In The same Hospital as entered Doctor works at</h3><br>

<form action="user_5.php" method="POST">
    <label for="dn"> ENTER DOCTOR ID: </label><br>
    <input class="inp" type="text" id="dn" name="dn" ><br>
    <input class="inp" type="submit" value="See Result" name="submit">

</form>
</div>
</div>
</div>
<br>
<div id="parent">

<div id="left">
    <div class="ins">
<h3>See Overall Covid Status In a <br>Particular district</h3>
<br>
<form action="user_6.php" method="POST">
    <label for="ar"> Search Result For an District: </label><br>
    <input class="inp" type="text" id="ar" name="ar" ><br>
    <input class="inp" type="submit" value="See Result" name="submit">

</form>
</div>
</div>








<div id="right">
    <div class="ins">
<h3>See Covid Status For a Particular <br>Gender</h3>
<br>
<form action="user_7.php" method="POST">
    <label for="gn"> Enter Gender: </label><br>
    <input class="inp" type="text" id="gn" name="gn" ><br>
    <input class="inp" type="submit" value="See Result" name="submit">

</form>
</div>
</div>
</div>




<br><br>
<div class="us">
    <div class="ins">
<h2>Patient's Overview within a Particular Age</h2><br>

<form action="user_8.php" method="POST">
   <input type="radio" name="ag" value="70"> 61 - 70
   <input type="radio" name="ag" value="60"> 51 - 60
   <input type="radio" name="ag" value="50"> 41 - 50<br><br>
   <input type="radio" name="ag" value="40"> 31 - 40
   <input type="radio" name="ag" value="30"> 21 - 30
   <input type="radio" name="ag" value="20"> 11 - 20
   <input type="radio" name="ag" value="10"> 01 - 10<br>
   

   <br>
    <input class="inp" type="submit" value="See Result" name="submit">

</form></div>
</div>
</div>


<div class="ds3"><a href="wel_user.php">GO BACK</a></div>

<br><br>






</body>
</html>
<!doctype html>
<html>
<head>
    <style>

        table{
            background-color:none;
            padding:65px;
            width:70%;
            text-align:left;
        
        }
        body{
            background-image: url('log1.PNG');
            background-repeat: no-repeat;
           background-size: cover;
        }
        .mr{
           text-align:center;
           border-radius:15px;
        }
        .inp{
            border-radius:12px;
            padding:10px;
            text-align:center;
            background-color:lightblue;
            width:50%;
            margin:auto;
            font-weight: bolder;
        }
        .inp:hover{
            border-radius:12px;
            padding:10px;
            text-align:center;
            background-color:violet;
            width:50%;
            margin:auto;
        }
        th,td{
            color:white;
        }
    </style>
     <link rel="stylesheet" href="nav_style.css">
</head>
<body>
<header>
        <ul>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="adminlog.php">ADMIN LOGIN</a></li>
            <li class="active"><a href="doctorlog.php">DOCTOR LOGIN</a></li>
            <li><a href="wel_user.php">USER </a></li>
            <li><a href="home_page.php">HOME</a></li>
        </ul>
    </header>
    <table class="mr" border="0" align="left" cellpadding="40"><tr><td>
        <P align="center">DOCTOR LOG IN</P><BR>
    <form action="weldoctor.php" method="post">
        <label for="di">DOCTOR ID</label><BR>
        <input class="inp" type="text" id="di" name="di"><br><br>
        <label for="pass">PASSWORD</label><BR>
        <input class="inp" type="password" id="pass" name="pass"><br><br>
    
        <input class="inp" type="submit" name="submit" value="LOG IN">
    </td>
    </tr>

    </form>
    </table>

</body>
</html>
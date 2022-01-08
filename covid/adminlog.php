<!doctype html>
<html>
<head>
    <style>
       
       body{
            background-image: url('log2.PNG');
            background-repeat: no-repeat;
           background-size: cover;
        }
        table{
            background-color:none;
            padding:65px;
            width:70%;
            text-align:left;
        
        }
        .mr{
           text-align:center;
           border-radius:15px;
        }
        .inp{
            border-radius:12px;
            padding:10px;
            width:50%;
            margin:auto;
            background-color:lightblue;
            text-align:center;
            font-weight: bolder;
        
        }
        .inp:hover{
            border-radius:12px;
            padding:10px;
            padding:10px;
            width:50%;
            margin:auto;
            background-color:coral;
            text-align:center;
            font-weight: bolder;
        
        }
        th,td{color:white;
        font-weight: bolder;
    font-size: larger;}

    </style>
    <link rel="stylesheet" href="nav_style.css">
</head>
<body>
<header>
        <ul>
            <li><a href="about.php">ABOUT US</a></li>
            <li class="active"><a href="adminlog.php">ADMIN LOGIN</a></li>
            <li ><a href="doctorlog.php">DOCTOR LOGIN</a></li>
            <li> <a href="wel_user.php">USER </a></li>
            <li><a href="home_page.php">HOME</a></li>
        </ul>
    </header>
    
    <table class="mr" border="0" align="left" cellpadding="40"><tr><td>
    <P align="center">ADMIN LOG IN</P>
    <form action="wel_admin.php" method="POST">
        <label for="email">E-MAIL</label><BR>
        <input class="inp" type="text" id="email" name="email"><br><br>
        <label for="pass">PASSWORD</label><BR>
        <input class="inp" type="password" id="pass" name="pass"><br><br>
    
        <input class="inp" type="submit" value="LOG IN">
        <br>
        
    </td>
    </tr>

    </form>
    </table>
</body>
</html>
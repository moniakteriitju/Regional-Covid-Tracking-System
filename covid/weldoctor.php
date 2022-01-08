<html>

<head>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="doctor_page.css">
    <style>
        body {
            background-image: url('bc1.PNG');
    background-repeat: no-repeat;
  background-size:cover;

        }

        table {
            width: 80%;
            height: 15%;
            border-spacing: 3px;
        float: left;


        }

        td {
            text-align: center;
            font-weight: bold;
        }

        th {
            text-align: center;
            font-weight: bolder;
        }

        p {
            color: black;
            font-size: larger;
        }

        .mydiv {


            text-align: center;
        }

        .inf {
            width: 50%;
            text-align: center;
            margin: auto;
            background-color: aliceblue;
            color: black;
            border-radius: 5px;
            padding: 25px;
            font-size: larger;
        }
        .cc{
            
            border-radius:5px;
        }
       a{
           text-decoration:none;
           display:block;
           color:darkslateblue;
    padding: 0 28px;
    font-size: x-large;
     border:2px solid darkslateblue;
     padding: 2 2px;
     width:20%;
     border-radius:10px;

       }
       a:hover{
    background-color:darkslateblue;
    color:white;
    width:20%;
    padding: 2 2px;
    border-radius:10px;
}
    </style>
    <link rel="stylesheet" href="nav_style.css">
</head>
<body>


    


    <?php
    include_once 'db_connection.php';

    $dd = $_POST['di'];
    $pass = $_POST['pass'];
    //echo $em;
    $qr = "select pass from doctorlogg where id='$dd';";
    $res = mysqli_query($cnn, $qr);
    $nr = mysqli_num_rows($res);
    if ($nr != 1) {
    ?>
<br><br><br>
        <table class="cc" border='0' align='center' >
            <tr>
                <td>
                    <h1>
                        <P style="color:red">INVALID ID OR PASSWORD !
                    </h1>
                    </P><BR>
                    <P align="center"><a href='doctorlog.php'>TRY AGAIN</a></P>
                </td>
            </tr>
        </table>
        <?php
    }
     else {
        if (mysqli_fetch_assoc($res)['pass'] != $pass) {

        ?>
<br><br><br>
            <table class="cc" border='0' align='center' cellpadding='50'>
                <tr>
                    <td>
                        <h1>
                            <P style="color:red">INVALID ID OR PASSWORD !
                        </h1>
                        </P><BR>
                        <P align="center"><a href='doctorlog.php'>TRY AGAIN</a></P>
                    </td>
                </tr>
            </table>
        <?php
        } 
        else{

            ?>
            <br><br><br>
                        <table class="cc" border='0' align='center'>
                            <tr>
                                <td>
                                    <h1>
                                        <P style="color:darkslateblue">Welcome To Doctor Page!
                                    </h1>
                                    </P>
                                <?php
                                   echo "<P align='center'><a href='doctor.php?id=$dd'>See Details !</a></P>";
                                   echo "<P align='center'><a href='home_page.php'>Home!</a></P>";
                                   ?>
                                </td>
                            </tr>
                        </table>
                    <?php

        }
    }
    ?>
    </body>
    </html>


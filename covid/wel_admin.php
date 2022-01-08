<?php
include_once 'db_connection.php';
?>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<style>


body {
            background-image: url('bc8.PNG');
    background-repeat: no-repeat;
  background-size:cover;

        }
        table {
            width: 80%;
            height: 15%;
            border-spacing: 3px;
        float: left;


        }
a.one{
           text-decoration:none;
           display:block;
           color:white;
           background-color: green;
    padding: 3 28px;
    font-size: x-large;
     border:2px solid darkslateblue;
    
     width:15%;
     border-radius:10px;

       }
       a.one:hover{
    background-color:black;
    color:white;
    width:15%;
   
    border-radius:10px;
}



a.two{
           text-decoration:none;
           display:block;
           background-color:darkslateblue;
    color:white;
    padding: 3 28px;
    font-size: x-large;
     border:2px solid darkslateblue;
     
     width:50%;
     border-radius:10px;

       }
       a.two:hover{
    background-color:black;
    color:white;
    padding: 3 28px;
    width:50%;

    border-radius:10px;
}






th,td{
    text-align:center;
}
.at{
    
    border-radius:10px;
    
    width:50%;
    margin:auto;
    

}
</style>
</head>
<body>





        <?php
        $em=$_POST['email'];
        $pass=$_POST['pass'];
        //echo $em;
        $qr="select pass from admin where email='$em';";
        $res=mysqli_query($cnn,$qr);
        $nr=mysqli_num_rows($res);
        if($nr!=1)
        {
            ?>
            <p>.</p>
            <br><br><br><br>
            <table border='0' align='center'cellpadding='50'>
            <tr><td><h1><P style="color:red">INVALID EMAIL OR PASSWORD !</h1></P>
            <P align="center"><a  class="one"href='adminlog.php'>TRY AGAIN</a></P>
            </td></tr>
            </table> 
            <?php
        }
        else
        {
            if(mysqli_fetch_assoc($res)['pass']!=$pass)
            {
            
                ?>
                <p>.</p>
            <br><br><br><br>
                <table border='0' align='center'cellpadding='50'>
                <tr><td><h1><P style="color:red">INVALID EMAIL OR PASSWORD !</h1></P>
                <P align="center"><a class="one"href='adminlog.php'>TRY AGAIN</a></P>
                </td></tr>
                </table> 
                <?php
            }
            else
            {
                ?>
                <p>.</p>
            
                <table border='0' align='center'cellpadding:20px>
                <tr><td><h1><P style="color:darkslateblue">WELCOME TO ADMIN PAGE !</h1></P>
            </td></tr>
            <tr><td>
                <div class="at">
                <P align="center"><a class="two"href='admin.php'>See Details</a></P>
              
                
                </div>
                <br><br>
                </td></tr>
            <tr><td>
                
                <P align='center'><a class="one"href='home_page.php'>Home!</a></P>
                </td></tr>
                </table> 
                <?php
            }
        }
        ?>

                

        
        </body>
</html>
  
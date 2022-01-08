<?php
include_once 'db_connection.php';
?>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
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
a.one{
           text-decoration:none;
           background-color:black;
    color:white;
           color:white;
        
    padding: 3 28px;
    font-size: x-large;
     border:2px solid darkslateblue;
    
     width:15%;
     border-radius:10px;

       }
       a.one:hover{
    background-color:white;
    color:black;
    width:15%;
   
    border-radius:10px;
}



a.two{
           text-decoration:none;
           display:block;
           background-color:darkblue;
    color:white;
    padding: 3 28px;
    font-size: x-large;
     border:2px solid darkblue;
     
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




   <p>.</p>
          
                
               
            
                <table border='0' align='center'cellpadding:20px>
                <tr><td><h1><P style="color:black">WELCOME TO ADMIN PAGE !</h1></P>
            </td></tr>
            <tr><td>
                <div class="at">
                <P align="center"><a class="two"href='t_patient.php'>Patient Table</a></P>
                <P align="center"><a class="two"href='t_hospital.php'>Hospital Table</a></P>
                <P align="center"><a class="two"href='t_covid.php'>Covid_Ward Table</a></P>
                <P align="center"><a class="two"href='t_medical.php'>Medical_info Table</a></P>
                <P align="center"><a class="two"href='t_doctor.php'>Doctor Table</a></P>
                
                </div>
                <br>
                </td></tr>
            <tr><td>
                
                <P align='center'><a class="one"href='home_page.php'>Home!</a></P>
                </td></tr>
                </table> 
                <?php
            
        ?>

                

        
        </body>
</html>
    

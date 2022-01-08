<?php
include_once 'db_connection.php';
?>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="doctor_page.css">
<style>
body{
    background-color:darkcyan;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color:blue;
    
}
.inp{
    
    padding:3px;
    font-size: large;
    color:darkblue;
    background-color:white;
    border-radius:7px;
    text-decoration: none;
}
.inp:hover{
    color:white;
    background-color:darkblue;
    border-radius:7px;

}
.mydiv{
    text-align:center;

}
td,th{
    padding:3px;
    text-align:center;
    
}
table{
    text-align:center;
    height:15%;
    border-spacing:5px;
    width:100%;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}
.ln{
    background-color:white;
text-align:center;
font-size:larger;
    padding:25px;

}
.aa{
    color:darkblue;
    text-decoration: none;

}
.aa:hover{
    color:white;
    background-color:darkblue;
    border-radius:3px;
    

}
</style>
<link rel="stylesheet" href="nav_style.css">
</head>
<body>
<header>
        <ul>
            <li><a href="about.php">ABOUT US</a></li>
            <li class="active"><a href="adminlog.php">ADMIN LOGIN</a></li>
            <li ><a href="doctorlog.php">DOCTOR LOGIN</a></li>
            <li> <a href="userlog.php">USER </a></li>
            <li><a href="home_page.php">HOME</a></li>
        </ul>
    </header>

<?php


//MEDICAL_INFO............................
            
                $qr="select * from medical_info;";
                $res=mysqli_query($cnn,$qr);
                $nr=mysqli_num_rows($res);
                if($nr>0)
                {
                    ?>
                    
                  
                    <br><br>
                    <div class="p4">
                    <div class="bb">
                        <div class="mydiv">
                    <h2>1. MEDICAL_INFO</h2>
                    <table border="2">
                    <tr><th>pat_id</th><th>admit_date</th><th>room_no</th><th colspan="2">operation</th></tr>
                    <?php
                    while($rr=mysqli_fetch_assoc($res))
                    {
                  echo "<tr><td>".$rr['pat_id']."</td><td>".$rr['admit_date']."</td><td>".$rr['room_no'].
                  "</td><td><a class='aa' href='deletemedical.php?pi=$rr[pat_id]'>delete</a></td>
                  <td><a class='aa' href='updatemedical.php?pi=$rr[pat_id] & ad=$rr[admit_date] & rn=$rr[room_no]'>update</a></td>
                  </tr>";

                    }
                    ?>
                    </table><br>
                    <form action="add_medical.php" method="POST">
                    <input class="inp" type="submit" value="INSERT">
                    </form>
                </div>
                </div>
                </div>
                    
                    <?php


                }








//HOSPITAL.............................................................

$qr="select * from hospital;";
$res=mysqli_query($cnn,$qr);
$nr=mysqli_num_rows($res);
if($nr>0)
{
    ?>
    <div class="p4">
        <div class="bb"><div class="mydiv">
    <h2>2. HOSPITAL</h2>
    
    <table border="2">
    <tr><th>hos_id</th><th>hos_name</th><th>hos_add</th><th>district</th><th>hos_phn</th><th colspan="2">operation</th></tr>
    <?php
    while($rr=mysqli_fetch_assoc($res))
    {
  echo "<tr><td>".$rr['hos_id']."</td><td>".$rr['hos_name']."</td><td>".$rr['hos_add']."</td><td>".$rr['district']."</td><td>".$rr['hos_phn'].
  "</td><td><a class='aa' href='deletehospital.php?hi=$rr[hos_id]'>delete</a></td>
  <td><a class='aa' href='updatehospital.php?hi=$rr[hos_id] & ha=$rr[hos_add] & hp=$rr[hos_phn] & hn=$rr[hos_name] & ds=$rr[district]'>update</a></td>
  </>";

    }
    ?>
    </table><br>
    <form action="add_hospital.php" method="POST">
    <input class="inp" type="submit" value="INSERT">
    </form>
</div>
</div>
</div>
    
    <?php


}








// COVID WORD.......................................
                
                $qr="select * from covid_ward;";
                $res=mysqli_query($cnn,$qr);
                $nr=mysqli_num_rows($res);
                if($nr>0)
                {
                    ?>
                    <div class="p4"><div class="bb"><div class="mydiv">
                    <h2>3. COVID_WARD</h2>
                    <table border="2">
                    <tr><th>ward_id</th><th>vaccine</th><th>status</th><th>pat_id</th><th>hos_id</th><th colspan="2">operation</th></tr>
                    <?php
                    while($rr=mysqli_fetch_assoc($res))
                    {
                  echo "<tr><td>".$rr['ward_id']."</td><td>".$rr['vaccine']."</td><td>".$rr['status']."</td><td>".$rr['pat_id']."</td><td>".$rr['hos_id'].
                  "</td><td><a class='aa' href='deletecovid.php?wi=$rr[ward_id]'>delete</a></td>
                  <td><a class='aa' href='updatecovid.php?wi=$rr[ward_id] & va=$rr[vaccine] & st=$rr[status] & pi=$rr[pat_id] & hi=$rr[hos_id]'>update</a></td>
                  </tr>";

                    }
                    ?>
                    </table><br>
                    <form action="add_covid.php" method="POST">
                    <input class="inp" type="submit" value="INSERT">
                    </form>
                </div>
                </div>
                </div>
                    
                    <?php
                }
               












     //DOCTOR...................................................................

              
                $qr="select * from doctor;";
                $res=mysqli_query($cnn,$qr);
                $nr=mysqli_num_rows($res);
                if($nr>0)
                {
                    ?>
                    <div class="p4"><div class="bb"><div class="mydiv">
                    <h2>4.DOCTOR</h2>
                    <table border="2">
                    <tr><th>doc_id</th><th>doc_name</th><th>doc_phn</th><th>email</th><th>availability</th><th>hos_id</th><th>ward_id<th colspan="2">operation</th></tr>
                    <?php
                    while($rr=mysqli_fetch_assoc($res))
                    {
                  echo "<tr><td>".$rr['doc_id']."</td><td>".$rr['doc_name']."</td><td>".$rr['doc_phn']."</td><td>".$rr['doc_email']."</td><td>".$rr['availability']."</td><td>".$rr['hos_id']."</td><td>".$rr['ward_id'].
                  "</td><td><a class='aa' href='deletedoctor.php?di=$rr[doc_id]'>delete</a></td>
                  <td><a class='aa' href='updatedoctor.php?di=$rr[doc_id] & dn=$rr[doc_name] & dp=$rr[doc_phn] & em=$rr[doc_email] & av=$rr[availability]
                 &hi=$rr[hos_id] & wi=$rr[ward_id]'>update</a></td>
                  </tr>";

                    }
                    ?>
                    </table><br>
                    <form action="add_doctor.php" method="POST">
                    <input class="inp" type="submit" value="INSERT">
                    </form>
                </div>
                </div>
                </div>
                    
                    <?php
                }




                

//PATIENT....................................................................
                
                $qr="select * from patient;";
                $res=mysqli_query($cnn,$qr);
                $nr=mysqli_num_rows($res);
                if($nr>0)
                {
                    ?>
                    <div class="p4"><div class="bb"><div class="mydiv">
                    <h2>5.PATIENT</h2>
                    <table border="2">
                    <tr><th>pat_id</th><th>pat_name</th><th>pat_add</th><th>pat_phn</th><th>age</th><th>bld_grp</th><th>gnder</th><th>hos_id</th><th>doc_id</th><th colspan="2">Edit</th></tr>
                    <?php
                    while($rr=mysqli_fetch_assoc($res))
                    {
                  echo "<tr><td>".$rr['pat_id']."</td><td>".$rr['pat_name']."</td><td>".$rr['pat_add']."</td><td>".$rr['pat_phn']."</td><td>".$rr['age']."</td><td>".$rr['blood_group']."</td><td>".$rr['gender']."</td><td>".$rr['hos_id']."</td><td>".$rr['doc_id'].
                  "</td><td><a class='aa' href='deletepatient.php?pi=$rr[pat_id]'>delete</a></td>
                  <td><a class='aa' href='updatepatient.php?pi=$rr[pat_id] & pn=$rr[pat_name] & pa=$rr[pat_add] & pp=$rr[pat_phn] & age=$rr[age]
                 & bg=$rr[blood_group] & gn=$rr[gender] & hi=$rr[hos_id] & di=$rr[doc_id]'>update</a></td>
                  </tr>";

                    }
                    ?>
                    </table><br>
                    <form action="add_patient.php" method="POST">
                    <input class="inp" type="submit" value="INSERT">
                    </form>
                </div>
                </div></div>
                    
                    <?php
                }

            
        
        ?>
        
        </body>
</html>
    

<html>

<head>
   <style>
       body{
           background-color:gray;
       }
       .mydiv{
           background-color:darkslateblue;
           color:white;
           width:75%;
           margin:auto;
           text-align:center;
           border-radius:5px;
           padding:35px;

       }
       .mydiv:hover{
           background-color:indigo;
           color:white;
           border:2px solid maroon;
           width:75%;
           margin:auto;
           text-align:center;
           border-radius:5px;
           padding:35px;

       }

       p{
           font-size:larger;
           
       }
       .tt{
           background-color:white;
           color:indigo;
           text-align:center;
           width:65%;
           margin:auto;
           padding:2px;
           border-radius:2px;
           font-weight: bolder;
        

       }
       table{
           width:100%;

       }
       th,td{
           text-align:center;
           color:white;
       }
       .inf{
           background-color:lightgreen;
           color:black;
           width:65%;
           margin:auto;
           padding:5px;
           border-radius:2px;
           text-align:center;
           border:10px solid indigo;

       }
      
       .hv{
           text-align:center;
           border-radius:5px;
           padding:3px;
           background-color:olivedrab;
       }
       a{
           text-decoration:none;
           color:white;
       }
       .ds3{
           width:50%;
           margin:auto;
           background-color:darkblue;
           color:white;
           padding:10px;
           border-radius:3px;
           text-align:center;
       }
       .ds3:hover{
           width:50%;
           margin:auto;
           background-color:black;
           color:white;
           padding:10px;
           border-radius:3px;
           text-align:center;
       }
   </style>
     
    <link rel="stylesheet" href="nav_style.css">
</head>



    


    <?php
    include_once 'db_connection.php';

    $id=$_GET['id'];
    


        ?>
        <header>
        <ul>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="adminlog.php">ADMIN LOGIN</a></li>
            <li class="active"><a href="doctorlog.php">DOCTOR LOGIN</a></li>
            <li><a href="wel_user.php">USER </a></li>
            <li><a href="home_page.php">HOME</a></li>
        </ul>
    </header>

            <body>
                <br><br>
                   <div class="tt"><p class="p2"> Welcome To Doctor Page Your Id = <?php echo "$id";?></p></div> 
                <br><br>
                <?php

                $qr = "select * from patient where doc_id='$id';";
                $res = mysqli_query($cnn, $qr);
                $nr = mysqli_num_rows($res);

                ?>


                
                    <div class="mydiv">
                        <h1> All patients </h1>
                        <table border="2" style="color:blue" align="center">
                            <tr>
                                <th>pat_id</th>
                                <th>pat_name</th>
                                <th>pat_add</th>
                                <th>pat_phn</th>
                                <th>age</th>
                                <th>blood_grp</th>
                                <th>gender</th>
                                <th>hos_id</th>
                            </tr>
                            <?php
                            

                                while ($rr = mysqli_fetch_assoc($res)) {
                                    echo "<tr><td>" . $rr['pat_id'] . "</td><td>" . $rr['pat_name'] . "</td><td>" . $rr['pat_add'] . "</td><td>" . $rr['pat_phn'] . "</td><td>" . $rr['age'] . "</td><td>" . $rr['blood_group'] . "</td><td>" . $rr['gender'] . "</td><td>" . $rr['hos_id'] .
                                        "</td>
                  
                  </tr>";
    }
                                
                            ?>
                        </table><br><br>

                        <?php

                        ?>



                    <?php
                            
                            echo "<p>Total number of patient under your observation= $nr</p><br>";
                    ?>
                    </div>
                
                
                <br>
                
                <?php


                // no. 02


                $qr = "select * from patient inner join covid_ward using(pat_id) where (doc_id='$id' and status='cure') ;";
                $res = mysqli_query($cnn, $qr);
                $nr = mysqli_num_rows($res);

                ?>
                <div class="tb1">
                    <div class="qq">
                        <div class="mydiv">
                            <h1>Cured</h1>

                            <table border="2" style="color:blue" align="center">
                                <tr>
                                    <th>pat_id</th>
                                    <th>ward_id</th>
                                    <th>hos_id</th>
                                    <th>status</th>
                                    <th>vaccine</th>
                                </tr>
                                <?php

                            

                                    while ($rr = mysqli_fetch_assoc($res)) {
                                        echo "<tr><td>" . $rr['pat_id'] . "</td><td>" . $rr['ward_id'] . "</td><td>" . $rr['hos_id'] . "</td><td>" . $rr['status'] . "</td><td>" . $rr['vaccine'] . "</td>
  
  </tr>";
                                    }                   
                                ?>
                            </table><br><br>



                            <?php

                                    echo "<p>total number of cured patient= $nr</p><br>";
                            ?>
                        </div>
                    </div>
                </div>
                <br><br>
            <?php
                                






                                //no. 3*************************************************



                                $qr = "select * from patient inner join covid_ward using(pat_id) where (doc_id='$id' and status='under treatment') ;";
                                $res = mysqli_query($cnn, $qr);
                                $nr = mysqli_num_rows($res);

            ?>
            <div class="tb1">
                <div class="mydiv">
                    <h1> Under Treatment</h1>
                    <table border="2" style="color:blue" align="center">
                        <tr>
                            <th>pat_id</th>
                            <th>ward_id</th>
                            <th>hos_id</th>
                            <th>status</th>
                            <th>vaccine</th>
                        </tr>
                        <?php
                        

                            while ($rr = mysqli_fetch_assoc($res)) {
                                echo "<tr><td>" . $rr['pat_id'] . "</td><td>" . $rr['ward_id'] . "</td><td>" . $rr['hos_id'] . "</td><td>" . $rr['status'] . "</td><td>" . $rr['vaccine'] . "</td>
  
  </tr>";
                            }
                            
                        ?>
                    </table><br><br>



                    <?php
                            echo "<p>total number patient currently under treatment= $nr</p><br>";
                    ?>
                </div>
            </div>
            <br><br>
        <?php
                        




                        //no. 4.***********************************************


                        $qr = "select * from patient inner join covid_ward using(pat_id) where (doc_id='$id' and status='dead') ;";
                        $res = mysqli_query($cnn, $qr);
                        $nr = mysqli_num_rows($res);
        ?>

        <div class="tb1">
            <div class="mydiv">
                <h1> Dead</h1>
                <table border="2" style="color:blue" align="center">
                    <tr>
                        <th>pat_id</th>
                        <th>ward_id</th>
                        <th>hos_id</th>
                        <th>status</th>
                        <th>vaccine</th>
                    </tr>
                    <?php

                   

                        while ($rr = mysqli_fetch_assoc($res)) {
                            echo "<tr><td>" . $rr['pat_id'] . "</td><td>" . $rr['ward_id'] . "</td><td>" . $rr['hos_id'] . "</td><td>" . $rr['status'] . "</td><td>" . $rr['vaccine'] . "</td>
  
  </tr>";
                        
                        }
                    ?>
                </table><br><br>



            <?php
                    
                    echo "<p>total number of dead patient= $nr</p><br>";
            ?>
            </div>
        </div>
        <br><br>
        <?php








        ?>
        
            <div class="inf">
            <h4>
                <p style="color:black"> Do you want to see the overview of covid patient in your<br> hospital?</p>
            </h4>

            <form action="doc_hos.php" method="POST">
                <label for="hi"> ENTER HOSPITAL ID: </label><br><br>
                <input class="hv" type="text" id="hi" name="hi"><br><br>

                <label for="id"> Doctor id: </label><br><br>
                <input class="hv" type="text" id="id" name="id"><br><br>

                <input class="hv"type="submit" value="submit" name="submit">

            </form>
                
                    </div>
                    <br><br>

           <div class="ds3"> <a href="home_page.php">HOME</a></div> 
    <br><br>
            </body>

  



</html>
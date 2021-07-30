<html>

<style>
    body{
        background:#333 url(images/1.jpeg);
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-repeat:no-repeat;
        overflow: hidden;
    }
    .box {
            left:50%;
            top:30%;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 5px;
            font-family: sans-serif;
            text-align: left;
            line-height: 1;
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            max-width: 50%;
            max-height: 50%;
            padding: 20px 40px;
        }
    .container {
            position:absolute;
            display: flex;
            justify-content: center;
            height: 140%;
            width: 100%;
            padding-top:5%;
        } 
    .btn-lg{
        background-color:darkslategray;
        color:white;
        margin-left:130px;
        margin-right:10px;
        height:1.5cm;
        font-size:20;
        width:5cm;
        font-family: 'Comic Neue', cursive;
    }
</style>
    <body>
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="tourism";
            $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
            $result = $conn->query("select * from customer c,signup s where c.user_id=s.user_id and logged_in='yes'");
            $num = mysqli_num_rows($result);
            if($num==1)
            {
                $row = $result->fetch_assoc();
                $p_id=$row['pack_id'];
                $res=$conn->query("select * from package p where p.pack_id='$p_id'");
                $row1= $res->fetch_assoc();?>
                <h1 style="text-align:center; color:snow"><br>Previous Booking details<br></h1>
                <div class="container">
                    <div class="box">
                         
                <form action="cancel.php?pack_id=<?php echo $row['pack_id'];?>" method="post">
                    
                   
                    
                    <h2><?php echo "Package: ".$row1['pack_name'];
                                echo "<br>";
                                echo "<br>";
                             echo "Places to visit:<br> ".$row1['pack_plc'];
                                echo "<br>";
                                echo "<br>";
                             echo "Duration: ".$row1['duration'];
                                echo "<br>";
                                echo "<br>";
                            echo "Number of people: ".$row['ppl'];
                                echo "<br>";
                                echo "<br>";
                             echo "Amount: ".$row['amt']."/-";
                                echo "<br>";
                                echo "<br>";
                             echo "Pick up location: ".$row1['loc_pick'];
                                echo "<br>";
                                echo "<br>";
                            echo "Registration date: ".$row['b_date'];
                                echo "<br>";
                                echo "<br>";
                            echo "Tour date: ".$row['from_date'];
                                echo "<br>";
                                echo "<br>";
                        ?>
                        <button class="btn-lg">Cancel</button>
                        </h2>
        
                </form>
                    </div>
            </div><?php
            }
            else
            {?>
                
                <h1 style="text-align:center; color:snow" >
                <?php echo "<br>";
                      echo "<br>";
                     echo "No Bookings done yet!!" ?>
                </h1>
            <?php 
            }?>
            
    </body>
</html>
    
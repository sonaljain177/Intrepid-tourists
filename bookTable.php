<?php
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="tourism";
    $start=($_POST['start']);
    $end=($_POST['end']);
    $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
    $res = $conn->query("select b_date from customer where b_date between '$start' and '$end'");
    $num = mysqli_num_rows($res);
    $row1 = $res->fetch_assoc();
    if($num>=1)
    {?>
        <!DOCTYPE html>
            <html>
            <head>
            <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              margin-left:auto;
              margin-right:auto;
              width: 80%;
            }

            td, th {
              border: 1px solid #000000;
              text-align: left;
              padding: 8px;
            }
            tr:nth-child(even) {
                background-color: #dddddd;
            }      
            #inp
            {
                text-align: center;    
            }
            .submit-btn{
                width: 8%;
                margin-top:25%;
                padding: 10px 30px;
                cursor: pointer;
                display: block;
                margin-left: 45%;
                background: linear-gradient(to right,#ed105f,#fdad06);
                border: 0;
                outline: none;
                border-radius: 30px;
            }
            </style>
            </head>
            <body>

            <h2 id="inp">Bookings:</h2>

            <table>
              <tr>
                <th>Customer name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Number of people</th> 
                <th>Amount</th>
                <th>Booking date</th>
                <th>Tour date</th>
                <th>Package</th>
              </tr><?php
        $result= $conn->query("select user_name,phone,email,ppl,amt,b_date,from_date,pack_name from signup s,customer c,package p where s.user_id=c.user_id and p.pack_id=c.pack_id and b_date between '$start' and '$end'");  
        while($row = $result->fetch_assoc())
        {
                echo "<tr>
                <td>".$row['user_name']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['email']."</td>
                <td>".$row['ppl']."</td>
                <td>".$row['amt']."/-</td>
                <td>".$row['b_date']."</td>
                <td>".$row['from_date']."</td>
                <td>".$row['pack_name']."</td>
              </tr>";
        }?>
        </table>
                <button name="logged" type="submit" class="submit-btn"><a href="validateAdmin.php" style="text-decoration:none"><strong>Back</strong></a></button>
       <?php     
    }
    else
    {
        echo '<script type="text/javascript">
          window.onload = function () { alert("No bookings done in the specified range"); }
        </script>';
        header('refresh:0.1; url=validateAdmin.php');
    }
    ?>

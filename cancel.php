<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>submitted</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
             a{
                text-decoration: none;
            }
            body{
                font: 18px comic;
                background:black;
                color:snow;
                height:100%;
                background-size:cover;
                background-position:center;
                background-repeat:no-repeat;
                overflow:hidden;
            }
            .cont{
                text-align:center;
            }
            .btn-lg{
                margin-left:auto;
                margin-top:150px;
                margin-bottom:20px;
                height:2cm;
                font-size:20;
                width:5cm;
                position:absolute;
                font-family: 'Comic Neue', cursive;
                }
        </style>
        </head>
<?php
    session_start();
    $pack_id=$_GET['pack_id'];
    $currentDate = date('Y-m-d');
    
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="tourism";
        $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
        $result=$conn->query("select from_date from customer where pack_id=$pack_id");
        $row = $result->fetch_assoc();
        $b_date = $row['from_date'];
    if($b_date>$currentDate)
    {
        $res=$conn->query("DELETE from customer where pack_id=$pack_id");
        $msg= "Your trip has been cancelled successfully!<br> Please visit our website again:)";
    }
    else if($b_date<$currentDate)
    {
        $msg= "OOPS!!You have already taken this trip";
    }
    else
    {
        $msg= "This trip cannot be cancelled";
    }
  ?>  

        <body>
        <h1 align="center"><?php echo $msg?></h1>
        <div class="cont"> 
        <button type="submit" class="btn-lg btn-info" name="home"><a href="home.php" style="text-decoration:none">Home</a></button>
        </div>
        </body>
    </html>


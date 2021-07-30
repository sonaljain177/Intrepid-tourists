
<?php
session_start();

createData();
function createData()
{
    $pack_id = $_GET['pack_id'];
    $name=textboxValue("Name");
    $mobile=textboxValue("Telephone");
    $email=textboxValue("EMail");
    $age = textboxValue("age");
    $ppl = textboxValue("ppl");
    $bdate=textboxValue("from-date");
    $con = mysqli_connect('localhost','root','','tourism');
    $result = $con->query("SELECT user_id from SIGNUP WHERE user_name='$name' AND logged_in='yes'");
    $num = mysqli_num_rows($result);
    if($num==1){
        $row = $result->fetch_assoc();
        $u_id = $row['user_id'];
        $re=$con->query("SELECT pack_amt from package where pack_id='$pack_id'");
        $r=$re->fetch_assoc();
        $amt=$r['pack_amt'];
        $total=$amt*$ppl;
        $currentDate = date('Y-m-d'); 
        $sql = "INSERT INTO customer(phone,email,age,b_date,from_date,pack_id,user_id,ppl,amt) values('$mobile','$email','$age','$currentDate','$bdate','$pack_id','$u_id','$ppl','$total')";
        $result1=mysqli_query($con,$sql);
        $sql1 = "SELECT guide_name,loc_pick, pack_name,amt,user_id from guide g, package p,customer c where p.pack_id='$pack_id' and g.guide_id='$pack_id' and c.pack_id='$pack_id' and c.user_id='$u_id'";
        $result1 =mysqli_query($con,$sql1);
        if ($result1->num_rows > 0)
        {
            while ($row = $result1->fetch_assoc())
            {?>
                <h2 align="center"> 
                    <?php
                        echo "<br>";
                        echo "<br>";
                        echo "Adventure on : $bdate";
                        echo "<br>";
                        echo "Amount : $total";
                        echo "/-";
                        echo "<br>";
                        echo "This particular guide named ".$row["guide_name"];
                        echo "<br>";
                        echo " will lead you through out the trip from ".$row["loc_pick"] ?></h2>
                    <?php
            }
        }?>

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
                background:#333 url(images/plain.jpg);
                color:snow;
                background-size:cover;
                background-position:center;
                background-repeat:no-repeat;
            }
           
            .box{
                padding-top:150px;
            }
            .cont{
                padding-left:200px;
            }
            .btn-lg{
                margin-left:200px;
                margin-right:10px;
                margin-top:100px;
                margin-bottom:20px;
                height:2cm;
                font-size:20;
                width:5cm;
                font-family: 'Comic Neue', cursive;
                }
        </style>
        </head>
        <body>
        <div class="container">
            <div class="box">
                <h1 align="center" >Payment successful!!!</h1>
                <p align="center" >Please wait for our response.Thank you.</p>
            </div>
        </div>
        <div class="cont">
            <button type="submit" class="btn-lg btn-info" name="contact"><a href="contact.php" style="text-decoration:none">Contact Us</a></button>
            <button type="submit" class="btn-lg btn-info" name="logout"><a href="logout.php" style="text-decoration:none">Logout</a></button>
        </div>
        </body>
    </html>
    <?php
    }
    else
    {
        echo '<script type="text/javascript">
          window.onload = function () { alert("Invalid Username,Please Login again"); }
        </script>';
        header('refresh:0.3; url=logout.php');
    }
}
function textboxValue($value){
    $conn = mysqli_connect('localhost','root','','tourism');
    $textbox = mysqli_real_escape_string($conn,trim($_POST[$value]));
    return $textbox;
}

?>

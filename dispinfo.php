<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="sty1.css">
  </head>
  <style>
    a{
    color:black;
    background-color:transparent;
    text-decoration: none;
    }
  </style>
  <body text="white" style= "background-color:black">
<?php      
if(isset($_POST["Goa"])){
    getTour("Goa");
};
if(isset($_POST["Karnataka"])){
    getTour("Karnataka");
};
if(isset($_POST["Kerala"])){
    getTour("Kerala");
};
if(isset($_POST["Himachal-Pradesh"])){
    getTour("Himachal Pradesh");
};
      
function getTour($name)
{
    $dbServername = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'tourism';
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    $sql = "Select * from tour where tour_place='$name'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0)
    {
        $row = mysqli_fetch_assoc($result)?>
        <center>
            <h1 style="font-family: verdana"> <?php echo $row['tour_place']?> </h1>
        </center>
        <div style="background-image: url('<?php echo $row['tour_img']?>');background-size:cover;display:block;margin-left:auto;margin-right:auto;padding:15%;width:20%;height:20%">
        </div> 
        <?php echo "</br>";
        echo $row['tour_info'];                
        echo "</br>";
        $sql1="SELECT pack_name,pack_id FROM package P,tour T WHERE P.tour_id = T.tour_id and T.tour_place='$name'";
        $conn1 = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
        $res = mysqli_query($conn1, $sql1);
        $resultCheck1 = mysqli_num_rows($res);?>
        <h3 style="color:DarkCyan"><?php echo "$name packages:"?></h3>
        <?php
        if ($resultCheck1 > 0)
        {
            while($row1 = mysqli_fetch_assoc($res))
            {?>
                <form action="package.php?packid=<?php echo $row1['pack_id'];?>" method="post">
                    <button type="submit" class="submit-btn" id="btn1"><?php echo $row1['pack_name']?></button>
                    <?php echo "</br>";
                    echo "</br>";?>
                </form>
                <?php
            }
        }
    }
}?>
    </body>
</html>
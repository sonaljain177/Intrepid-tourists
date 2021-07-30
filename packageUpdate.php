<?php
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="tourism";
    $pack=($_POST['pack']);
    $amt=($_POST['amt']);
    $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
    $res = $conn->query("select * from package where pack_name='$pack'");
    $num = mysqli_num_rows($res);
    if($num==1)
    {
        $result = $conn->query("UPDATE package set pack_amt='$amt' WHERE pack_name='$pack'");
        echo '<script type="text/javascript">
          window.onload = function () { alert("Package amount updated successfully"); }
        </script>';
        header('refresh:0.1; url=validateAdmin.php');
    }
    else
    {
        echo '<script type="text/javascript">
          window.onload = function () { alert("Invalid Package name"); }
        </script>';
        header('refresh:0.1; url=packUp.php');
    }
?>
    
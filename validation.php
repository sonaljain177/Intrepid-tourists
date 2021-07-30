<?php

session_start();

$con=mysqli_connect('localhost','root','','tourism');
$user_name=$_POST['user1'];
$pas_word=$_POST['pas'];

$sql="Select * from signup where user_name='$user_name' and pas_word='$pas_word'";

$result1=mysqli_query($con, $sql);

$num = mysqli_num_rows($result1);
if($num==1){
    if(isset($_POST['logged'])){
        $pname=$_POST['user1']; 
        $sql32=   "UPDATE signup SET logged_in = 'yes' WHERE user_name = '$pname'";
        if(mysqli_query($GLOBALS['con'], $sql32)){
            echo "done";
        };
    }
    header('location:home.php');
}
else{
    echo '<script type="text/javascript">
          window.onload = function () { alert("Incorrect Password"); }
        </script>';
        header('refresh:0.1; url=login.php');
}

?>
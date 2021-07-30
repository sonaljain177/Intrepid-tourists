<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','tourism');
    $user_name = ($_POST['user_name']);
    $pas_word = ($_POST['pas_word']);
    $con_pass = ($_POST['con_pass']); 
    
    $sql="Select * from signup where user_name='$user_name'";

    $result=mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num==1){
        echo '<script type="text/javascript">
          window.onload = function () { alert("Username Already Taken"); }
        </script>';
        header('refresh:0.1; url=login.php');
    }
    else if($pas_word==$con_pass){
        $reg = "INSERT INTO `signup` (user_name, pas_word, con_pass ,logged_in) VALUES ('$user_name', '$pas_word', '$con_pass', 'yes')";
        mysqli_query($conn, $reg);
        header('location:home.php');
    }
    else if($pas_word!=$con_pass){
        echo '<script type="text/javascript">
          window.onload = function () { alert("Passwords dont match"); }
        </script>';
        header('refresh:0.1; url=login.php');
    }
?>


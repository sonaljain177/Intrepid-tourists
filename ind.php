<?php
session_start();
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];
	$conn = mysqli_connect("localhost", "root", "", "tourism");
    $result = $conn->query("SELECT user_id from SIGNUP WHERE user_name='$name' AND logged_in='yes'");
    
    $num = mysqli_num_rows($result);
    if($num==1)
    {
        $row = $result->fetch_assoc();
        $u_id = $row['user_id'];
        $sql="INSERT INTO contact_form (user_id,email,subject,content) VALUES ('$u_id','$email','$subject','$content')";
	    $result1 = $conn->query($sql);
	    $insert_id = mysqli_insert_id($conn);
	    if(!empty($insert_id)) {
	       $message = "Your contact information is saved successfully.";
	       $type = "success";
	    }
	    /*$toEmail = "177sonujain@gmail.com";
	    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
	    mail($toEmail, $subject, $content, $mailHeaders);*/
    }
require_once "contact.php";
?>
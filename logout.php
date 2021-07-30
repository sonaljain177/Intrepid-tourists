<?php

session_start();

$con=mysqli_connect('localhost','root','','tourism');

$sql=  "UPDATE signup SET logged_in = 'no' WHERE logged_in = 'yes'" ;
if(mysqli_query($GLOBALS['con'], $sql))
{
   header('location:adUser.php');
};

?>
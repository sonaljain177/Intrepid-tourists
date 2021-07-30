<?php
function createdb(){
$servername="localhost";
$username="root";
$password="";
$dbname="tourism";
$con=mysqli_connect($servername,$username,$password,$dbname);
return $con;
}
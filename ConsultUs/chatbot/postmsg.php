<?php
 session_start();
  define("SITEURL",'http://3.109.14.4//consult/');  
  $servername = "3.109.14.4";
$username = "ostechnix";
$password = "Password123#@!";
// $servername = "localhost";
// $username = "root";
// $password = "";
    $dbname = "consultant_app";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }


$msg= $_POST['text'];
$room= $_POST['room'];
$ip= $_POST['ip'];
$uname='';
if(isset($_SESSION['current_user_name'])){
$uname=$_SESSION['current_user_name'];
}

$sql="INSERT INTO `msg`( `msg`, `room`, `ip`, `rtime`,`u_name`) VALUES ('$msg','$room','$ip',CURRENT_TIMESTAMP,'$uname')";
$res = mysqli_query($conn,$sql);


?>
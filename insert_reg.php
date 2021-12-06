<?php
require("utils/conn.php");

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$fullname= $fname . ' ' . $lname; 
$uname=$_POST["Uname"];
$mob=$_POST["mobile"];
$email=$_POST["email"];
$pass=$_POST["conpassword"];

$c_pass = md5($pass);

$sql = "INSERT into user_details (name, email, mobile, username ,password) 
values ('$fullname', '$email', '$mob', '$uname','$c_pass')";

$sql1 = "INSERT into user (username , password)
values ('$uname', '$c_pass')";

if($conn->query($sql) && $conn->query($sql1) === true){
    // echo "<br>" . "new record created";
    header('Location: log-reg.php');
}else{
    echo "error" . $sql  . "<br>" . $conn->error;
}

?>
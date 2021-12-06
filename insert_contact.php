<?php
require("utils/conn.php");

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$fullname= $fname . ' ' . $lname; 
// $uname=$_POST["Uname"];
// $mob=$_POST["mobile"];
 $email=$_POST["email"];
//$add=$_POST["address"];
$sub=$_POST["subject"];
$mess=$_POST["message"];

$sql = "INSERT into contact (name, email, subject, message) 
values ('$fullname', '$email', '$sub', '$mess')";

if($conn->query($sql) === true){
    // echo "<br>" . "new record created";
    header('Location:contact.php');
}else{
    echo "error" . $sql  . "<br>" . $conn->error;
}

$mail = mail($email , $sub , $mess);
if (!$mail) {
    echo "ERROR";
} else {
    echo "Mail sent!!";
}

?>
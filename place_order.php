<?php

require("utils/conn.php");
require("utils/session_start.php");

if(isset($_SESSION["cart"])){
    foreach($_SESSION["cart"] as $citem){
        $sql="INSERT INTO orderdetails ( pid , pamount , username , aid ) VALUES ('$citem[pid]','$citem[pamount]','$_SESSION[username]','$_SESSION[aid]')";
        echo $sql;
//          if($conn->query($sql) === TRUE){
//         unset($_SESSION["cart"]);
//         header('Location: order-complete.php');
//         }else{
//         echo "ERROR : " . $sql . "<br>" . $conn->error;
// }
$conn->close();
    }
}
<?php

require("utils/session_start.php");
require("utils/conn.php");


$add = $_POST["address"];
$user = $_SESSION["username"];

$sql= "INSERT into address (username, address)
values ('$user', '$add')";

if($conn->query($sql) == TRUE)
{
    unset($_SESSION["cart"]);
    header("Location: checkout.php");
}else{
    echo "ERROR" . $sql . $conn->error;
}
?>



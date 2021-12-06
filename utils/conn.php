<?php
$conn = new mysqli("localhost", "root", "" , "shoe_store");
if($conn->connect_error){
    echo "Error connecting to DB".$conn->connect_error;
}
?>
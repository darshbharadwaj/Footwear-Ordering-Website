<?php

 require("utils/conn.php");
    require("utils/session_start.php");

    if($_SESSION["logged_in"] == 1)
    {
        header("Location: checkout.php");
    }
    else{
        echo '<script>window.alert("Please log in");
        window.location.href="log-reg.php";</script>';
       // header("Location:")
    }
?>
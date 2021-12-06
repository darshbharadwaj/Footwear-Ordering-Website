<?php
    require("utils/conn.php");
    require("utils/session_start.php");
    $_SESSION["logged_in"]=0;
    if(isset($_POST["email1"]) && isset($_POST["password1"])){
        $result=$conn->query("SELECT * from user where username='".$_POST["email1"]."' and password='" . $_POST["password1"]."' and role='" . 'Admin' . "'");
        if(mysqli_num_rows($result) === 1){
            $_SESSION["logged_in"]=1;
            $_SESSION["username"] = $_POST["email1"];
            header('Location: admin_dash.php');
        }else{
            echo '<script>window.alert("Wrong username or password");
            window.location.href="admin_log.php";</script>';
        }
    }
?>
<?php
    require("utils/conn.php");
    require("utils/session_start.php");
    $_SESSION["logged_in"]=0;
    $c_pass1= md5($_POST["password1"]);


    if(isset($_POST["email1"]) && isset($c_pass1)){
        $result=$conn->query("SELECT * from user where username='".$_POST["email1"]."' and password='" . $c_pass1."'");
        if(mysqli_num_rows($result) == 1){
            $row=mysqli_fetch_assoc($result);
            $_SESSION["logged_in"]=1;
            $_SESSION["username"] = $row["username"];
            $_SESSION["role"] = $row["role"];
            if($row["role"]=="Admin")
            {
                header("Location: admin_dash.php");
            }else{
                header("Location: index.php");
            }
        }else{
            echo '<script>window.alert("Wrong username or password");
            window.location.href="log-reg.php";</script>';
        }
    }
?>
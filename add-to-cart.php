<?php

require("utils/conn.php");
require("utils/session_start.php");

if(!isset($_SESSION["cart"])){
    $_SESSION["cart"] = array();
}

if(isset($_GET["pid"]) && isset($_SESSION["cart"]))
{
    $result= $conn->query("SELECT * from products where pid=". $_GET["pid"]);
    $found=0;
    if(mysqli_num_rows($result) == 1)
    {
        $product["qty"]=1;
        $product = mysqli_fetch_assoc($result);
        if(count("cart")>0)
        {
             foreach ($_SESSION["cart"] as &$citem)
             {
                    if($_GET["pid"] == $citem["pid"])
                    {
                        $citem["qty"] = $citem["qty"]+1;
                        $found=1;
                        break;
                    }
             }
                if($found == 0)
                { 
                    $product["qty"]=1;
                    array_push($_SESSION["cart"],$product);
                }

        }
       
    }
}

echo "<script> window.history.back();</script>";
?>
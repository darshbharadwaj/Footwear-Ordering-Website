<?php

require("utils/conn.php");
require("utils/session_start.php");

if(isset($_GET["pid"]) && isset($_SESSION["cart"]) && count($_SESSION["cart"])>0)
{
          foreach ($_SESSION["cart"] as $index => &$citem)
             {
                    if($citem["pid"] == $_GET["pid"])
                    {
                         unset($_SESSION["cart"][$index]);
                    }
                }
            }
echo "<script> window.history.back();</script>";
?>
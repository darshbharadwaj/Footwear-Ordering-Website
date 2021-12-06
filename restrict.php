<?php
include("utils/session_start.php");
if($_SESSION["role"]=="Customer")
{
    header("Location: index.php");
}
?>
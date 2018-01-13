<?php
session_start();
$_SESSION["usersession"]="";
session_destroy();
header("location:login.php");
?>
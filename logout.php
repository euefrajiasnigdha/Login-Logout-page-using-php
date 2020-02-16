<?php
session_start();
session_destroy();
unset($SESSION['email']);
$_SESSION['message']="You are log out!";
header("Location:login.php");
?>
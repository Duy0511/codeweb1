<?php
session_start();
unset($_SESSION['USERNAME']);
header("location:login.php");
die();
?>
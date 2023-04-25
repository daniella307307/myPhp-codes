<?php
session_start(); //to ensure you are using came session
session_destroy();//destroy the session
header("location:login.php"); //to redirect back to 'index.php'
exit();
?>
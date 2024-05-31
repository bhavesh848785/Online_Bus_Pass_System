<?php
session_start();

session_destroy();

 echo "<script>alert('You have successfully logged out..');document.location='http://localhost/OBPS/login.php';</script>"; 
//header('location:login.php');

?>
<?php
include 'inc/connection.php';
$id=$_GET["delid"];

$exe= $con->query("delete from pass where id='$id'");

if($exe)
{
    header('location:all_pass.php');
}
else
{
    echo "<script>alert('Something went wrong');document.location='location:http://localhost/OBPS/admin/all_pass.php';</script>";
}


?>
<?php
$con= new mysqli("localhost","root","","obps");
if($con->connect_error)
{
    echo $con->connect_error;
    exit;
}
?>
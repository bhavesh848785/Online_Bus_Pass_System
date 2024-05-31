<?php
include 'inc/connection.php';

$pass = $_POST["pass_type"];

$result= $con->query("select * from pass where duration='$pass' ");
       
$row= $result->fetch_object();
$fees=$row->amount;

echo $fees;



?>
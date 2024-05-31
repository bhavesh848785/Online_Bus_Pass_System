<?php
include 'inc/connection.php';

session_start();
$id=$_SESSION["id"];

$userdetails= $con->query("select * from login where id='$id'");
$u= $userdetails->fetch_object();
?>



<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="dashboard.php" class="logo">
        <img src="../../OBPS/p2.png" style="height: 131px;
    width: 234px;
    position: relative;
    right: 19px;
    bottom: 10px;">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="padding:5px;padding-left: 10px; ">
               
                <span class="username"><?php echo $u->fname.''.$u->lname;?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                
                <li><a href="../Admin/change_password.php"><i class="fa fa-cog"></i>Change Password</a></li>
                <li><a href="../Admin/logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
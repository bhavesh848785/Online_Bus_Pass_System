<?php
@session_start();
include 'inc/connection.php';
if(isset($_SESSION["userid"]))
{
    $id=$_SESSION["userid"];
    $result= $con->query("select * from registration where id='$id'");
    $profile= $result->fetch_object();
}
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <ul class="nav navbar-nav">
        <li class=""><a href="#">Official No . : +91 98 98 98 98 98 <span class="sr-only">(current)</span></a></li>
       
        
      </ul>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Contact No . : +91 87 65 87 98 98 </a></li>
        <li><a href="#">Mail Id . : epassinfo@gmail.com </a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="header">
  <div class="container">
    <div class="header-bottom">
  <div class="logo">
<a href="index.php"> <img src="../OBPS/p2.png" style="height: 100px; width: 150px;"></a>
  </div>
    <div class="buttons" style="position: relative;top:15px;">
        <?php if(isset($_SESSION["userid"])){ ?>
        <a href="pass_status.php" class="button" style="background-color: skyblue;color:white" >Pass Status</a>
        <a href="pass_reg.php" class="button" style="background-color: skyblue;color:white" >Pass Registration</a>
                                <a href="profile.php" class="button" >Edit Profile</a>
                    <a href="change_password.php" class="button1">Change Password</a>
                                <a href="logout.php" class="button" style="background-color:red" >Logout</a>
                                <?php } ?>
        </div>
<!-- <div class="search">
        <form>
          <input type="text" value="" placeholder="search...">
        <input type="submit" value="">
      </form>
    </div>-->
<div class="clearfix"></div>
  </div>
 <div class="header-top">
  <div class="top-menu">
  	<span class="menu"><img src="images/nav.png" alt=""/> </span>
<ul>
   	<li><a href="index.php" class="active">home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.php">Services</a></li>
   	<li><a href="contact.php">Contact Us</a></li>
    </ul>
     <!-- script for menu -->
				
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>

					<!-- //script for menu -->

	</div>
	<div class="buttons">
				   		<?php
                        if(isset($_SESSION["userid"])) echo "Welcome <b>&nbsp;$profile->fname $profile->lname</b>";
                           else {
                               ?>
             <a href="joinus.php" class="button" >Join Us</a>
		                <a href="login.php" class="button1">Sign In</a>
                               <?php
                           }                     
                                                ?>
           
                                
				</div>
			<div class="clearfix"></div>
</div>

</div>
  </div>
<?php
include 'inc/connection.php';
session_start();
if(isset($_POST['submit']))
{
    
    $email=$_POST['email'];
    $password=$_POST['password'];
   
        $result= $con->query("select * from registration where email='$email' and password='$password'");
        $rowcount=$result->num_rows;
        if($rowcount==1)
        {
            $row= $result->fetch_object();
            $_SESSION["userid"]=$row->id;
            echo "<script>alert('You have successfully Logged In..');document.location='http://localhost/OBPS/index.php';</script>"; 
           // header('location:index.php');
        }
        else
        {
            echo "<script>alert('Invalid Username or Password..');</script>";
        }
}
   

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Real esate a wedding Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Love hearts Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Exo+2:400,900italic,900,800italic,800,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.1.min.js"></script>
 <script src="js/responsiveslides.min.js"></script>
    <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>

<style type="text/css">
	input[type="email"]
	{
	    border: 1px solid #EEE;
	    outline-color: #FF6392;
	    width: 96%;
	    font-size: 0.8125em;
	    padding: 0.5em;
	}
</style>


</head>
<body>
   
<?php include 'inc/header.php';?>
 <div class="content">
 <div class="main-1">
		<div class="container">
<div class="login-page">
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="joinus.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
                                <form method="post">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="email" id="email" name="email" required=""> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="text" id="password" name="password" required=""> 
				  </div>
				  <a class="forgot" href="http://localhost/OBPS/forgot_password.php">Forgot Your Password?</a>
				  <input type="submit" value="Login" name="submit" id="submit">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
		   </div>
	</div>
<!-- login -->

  </div>
	<br/><br/>
	</div>
	  
<?php include 'inc/footer.php';?>



 </body>
</html>
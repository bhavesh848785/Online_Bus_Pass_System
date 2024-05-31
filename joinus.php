<?php
include 'inc/connection.php';
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    
    if($password==$cpassword)
    {
        $result= $con->query("select * from registration where email='$email' or contact='$contact'");
        $rowcount=$result->num_rows;
        if($rowcount==1)
        {
            echo "<script>alert('Email or Contact Already Exist');</script>";
        }
        else
        {
            $exe=$con->query("INSERT INTO `registration`(`fname`, `lname`, `email`, `contact`, `password`) VALUES ('$fname','$lname','$email','$contact','$password')");
            if($exe)
            {
                echo "<script>alert('Registered Successfully..');document.location='http://localhost/OBPS/joinus.php';</script>"; 
            }
            else
            {
                echo "<script>alert('Something went wrong..');</script>"; 
            }
        }
    }
    else
    {
        echo "<script>alert('Missmatch Password and Confirm Password');</script>";
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
	    outline-color: #FF5B36;
	    width: 96%;
	    font-size: 1em;
	    padding: 0.5em;
	}
</style>

</head>
<body>
  <?php include 'inc/header.php';?>
 <div class="content">
 <!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
                            <form method="post"> 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>First Name<label>*</label></span>
						<input type="text" id="fname" name="fname" required="" pattern="[a-zA-Z]{3,20}" title="First Name Must be Valid"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Last Name<label>*</label></span>
						<input type="text" id="lname" name="lname" required="" pattern="[a-zA-Z]{3,20}" title="Last Name Must be Valid"> 
					 </div>
                                         <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Mobile No.<label>*</label></span>
						<input type="text" id="contact" name="contact" required="" pattern="[0-9]{10}" title="Contact Must be Valid"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Email Address<label>*</label></span>
						 <input type="email" id="email" name="email" required=""> 
					 </div>
                                      
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							 <div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Password<label>*</label></span>
						<input type="text" id="password" name="password" required="">
							 </div>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Confirm Password<label>*</label></span>
								<input type="text" id="cpassword" name="cpassword" required="">
							 </div>
					 </div>
				
				<div class="clearfix"> </div>
				<div class="register-but">
				   
					   <input type="submit" value="submit" id="submit" name="submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->

  </div>
	
	</div>
	<?php include 'inc/footer.php';?>



 </body>
</html>
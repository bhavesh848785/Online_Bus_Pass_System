<?php
include 'inc/connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $date= date('Y-m-d');
    
    $exe= $con->query("insert into inquiry(name,email,contact,subject,message,date) values('$name','$email','$contact','$subject','$message','$date')");
    if($exe)
    {
        echo "<script>alert('Your Inquiry has been submited successfully..');</script>"; 
    }
    else
    {
        echo "<script>alert('Something went wrong..');</script>"; 
    }

    
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Realty a Real Estates and Builders Category Flat Bootstarp Resposive Website Template | Contact :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Realty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
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
	input[type="email"]{
    padding: 11px;
    width: 51%;
    font-size: 1em;
    margin: 10px 0px;
    border: 1px solid #bbb;
    color: #bbb;
    background: none;
    -webkit-appearance: none;
    float: left;
    outline: none;
    font-weight: 400;
    border-radius: 0.3em;
    -webkit-border-radius: 0.3em;
    -o-border-radius: 0.3em;
    -moz-border-radius: 0.3em;
}
</style>


</head>
<body>
  <?php include 'inc/header.php';?>
 <div class="content">
 <div class="contact">
 <div class="container">
 
		<div class="clearfix"></div>
		<div class="contact_top">
			 		
			 			<div class="col-md-8 contact_left">
			 				<h4>Contact Us</h4>
			 				<p>You could drop us your inquiry we will get back to you within 24hours.</p>
                    <form method="post">
								 <div class="form_details">
	<input type="text" class="text" id="name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" placeholder="Enter Your Name.." required="" pattern="[a-zA-Z]+[a-zA-Z ]+" title="Name Must be Valid">
									<input type="email" class="text" name="email" id="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" placeholder="Enter Your Email.." required="">
									<input type="text" class="text" name="contact" id="contact" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact Number';}" placeholder="Enter Your Contact.." required="" pattern="[0-9]{10}" title="Contact Must be Valid">
									<input type="text" class="text" id="subject" name="subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" placeholder="Enter Your Subject.." required="" pattern="[a-zA-Z]+[a-zA-Z ]+" title="Subject Must be Valid">
									<textarea name="message" id="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" placeholder="Enter Your Message.." required=""></textarea>
									<div class="clearfix"> </div>
									<div class="sub-button">
									 	<input type="submit" value="Send message" name="submit">
									 </div>
						          </div>
						       </form>
					        </div>
					        <div class="col-md-4 company-right">
					        	<div class="company_ad">
							     		<h3>Contact Info</h3>
							     		<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit velit justo.</span>
			      						<address>
											 <p>email:<a href="mailto:example@mail.com">info@display.com</a></p>
											 <p>phone: 1.306.222.4545</p>
									   		<p>222 2nd Ave South</p>
									   		<p>Saskabush, SK   S7M 1T6</p>
									 	 	
							   			</address>
							   		</div>
							   		
							</div>	
							<div class="clearfix"> </div>
						
					</div>
</div>
</div>
  </div>
	
	</div>
	<?php include 'inc/footer.php';?>



 </body>
</html>
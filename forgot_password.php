<?php
include 'inc/connection.php';
session_start();

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true); 

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
   
   
        $result= $con->query("select * from registration where email='$email' ");
        $rowcount=$result->num_rows;
        if($rowcount==1)
        {
            $row= $result->fetch_object();
            $password=$row->password;
            
            try {
                        //Server settings
                        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username   = 'phptraining1@gmail.com';                     //SMTP username
                        $mail->Password   = 'PhpTraining@123';                           // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                                    // TCP port to connect to

                            //Recipients
                           $mail->setFrom('phptraining1@gmail.com', 'E-PASS');
                            $mail->addAddress($email, 'Praxware technologies');     // Add a recipient
                        //    $mail->addAddress('ellen@example.com');               // Name is optional
                        //    $mail->addReplyTo('info@example.com', 'Information');
                        //    $mail->addCC('cc@example.com');
                        //    $mail->addBCC('bcc@example.com');

                            //Attachments
                        //    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                        //    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                        //Content
                        $mail->isHTML(true);                                  // Set email format to HTML
                        $mail->Subject = 'Your Password';
                        $mail->Body    = " Your Password is : <b> $password </b>";
                      //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                        $mail->send();
                        //echo 'Password has been sent to your email id..';
                        
                         echo "<script>alert('Password has been sent to your email id..');</script>"; 
                    } catch (Exception $e) {
                        echo "<script>alert('Email Could Not be Sent..Something Went Wrong..');</script>";
                    }
            
           // header('location:index.php');
        }
        else
        {
            echo "<script>alert('Invalid EMail Id..Try Again');</script>";
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


</head>
<body>
   
<?php include 'inc/header.php';?>
 <div class="content">
 <div class="main-1">
		<div class="container">
<div class="login-page">
			   <div class="account_grid">
                               <div class="col-md-3"></div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>Forgot Password</h3>
				<p>If you have an account with us, please Enter Your Email Id and Get Password.</p>
                                <form method="post">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text" id="email" name="email" required=""> 
				  </div>
				 
				  <input type="submit" value="Send In Email" name="submit" id="submit">
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
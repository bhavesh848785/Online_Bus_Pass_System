<?php
include 'inc/connection.php';
session_start();
$id=$_SESSION["userid"];
if(isset($_POST['submit']))
{
    
    $old=$_POST['oldp'];
    $new=$_POST['newp'];
    $rnew=$_POST['rnewp'];
   
        $result= $con->query("select * from registration where password='$old' and id='$id'");
        $rowcount=$result->num_rows;
        if($rowcount==1)
        {
            if($new==$rnew)
            {
               $exe= $con->query("update registration set password='$new' where id='$id'");
               if($exe)
               {
                    echo "<script>alert('Password Updated Successfully..');document.location='http://localhost/OBPS/login.php';</script>"; 
               }
               else
               {
                    echo "<script>alert('Missmatch Password and Confirm Password');</script>";
               }
            }
            else
            {
                echo "Password and Confirm Password Missmatched..";
            }
                
             
        }
        else
        {
            echo "<script>alert('Invalid Password..Try Again...');</script>";
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
<meta charset = "UTF-8" />
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


</head>
<body>
  
<?php include 'inc/header.php';?>
 <div class="content">
 <div class="contact">
 <div class="container">
 
		<div class="clearfix"></div>
		<div class="contact_top">
			 		
			 			<div class="col-md-8 contact_left">
			 				<h4>Change Your Password</h4>
			 				<p>Verify Your old password and Update new one for more security.</p>
                                                        <form method="post">
								 <div class="form_details">
					      <input type="text" class="text" value="Old Password" name="oldp" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="" />
                  <input type="text" class="text" name="newp" value="New Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
									 <input type="text" class="text" name="rnewp" value="Confirm New Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
									 
									 <div class="clearfix"> </div>
									 <div class="sub-button">
									 	<input type="submit" value="Update" id="submit" name="submit">
									 </div>
						          </div>
						       </form>
					        </div>
					        <div class="col-md-4">
                                                    <img src="images/1.png">
							   		
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
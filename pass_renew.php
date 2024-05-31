<?php
include 'inc/connection.php';

session_start();
$id=$_SESSION["userid"];

//Set useful variables for paypal form
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_id = 'Sanjaymerchant@gmail.com'; //Business Email

$userdetails= $con->query("select * from registration where id='$id'");
$u= $userdetails->fetch_object();

$res1= $con->query("select * from pass_registration where userid='$id'");
$userdata= $res1->fetch_object();

//echo '<pre>';
//print_r($u);exit;

if(isset($_POST['submit']))
{
    $fname=$u->fname;
    $lname=$u->lname;
    $pass_type=$_POST['pass_type'];
    $fees=$_POST['fees'];
    $from=date('Y-m-d',  strtotime($_POST['from']));
    $to=date('Y-m-d',  strtotime($_POST['to']));
    
    ///idproof
    $idproof = $userdata->idproof;
    
    ///addressproof 
    $addressproof = $userdata->addressproof;
    
    
       
    $exe= $con->query("INSERT INTO `pass_registration`(`fname`, `lname`, `pass_type`, `fees`, `from_date`, `to_date`, `idproof`, `addressproof`,`userid`) VALUES ('$fname','$lname','$pass_type','$fees','$from','$to','$idproof','$addressproof','$id') ");
    if($exe)
    {
        echo "<script>alert('Pass Renewed Successfully..');</script>"; 
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
 
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>
 
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
                
                function getFees()
                {
                    var pass_type=$("#pass_type").val();
                    $.ajax({
                             type : "POST",
                             url: "get_fees.php",
                             data:"pass_type="+pass_type,
                             success:function(ans)
                             {
                                 $("#fees").val(ans);
                             }
                    });
                }
                
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
 <!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
                            <form method="post" action=''> 
				 <div class="register-top-grid">
					<h3>PASS INFORMATION</h3>
					 
                                        <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Pass Type<label>*</label></span>
                                                <select class="form-control" name="pass_type" id="pass_type" style="width: 526px;" onchange="getFees();">
                                                    <option value="">Select Month</option>
                                                    <option value="1">1 Month</option>
                                                    <option value="2">2 Month</option>
                                                    <option value="3">3 Month</option>
                                                    <option value="4">4 MOnth</option>
                                                    <option value="5">5 Month</option>
                                                    <option value="6">6 Month</option>
                                                    <option value="7">7 Month</option>
                                                    <option value="8">8 Month</option>
                                                    <option value="9">9 Month</option>
                                                    <option value="10">10 Month</option>
                                                    <option value="11">11 Month</option>
                                                    <option value="12">12 Month</option>
                                                </select>
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Pass Fees<label>*</label></span>
						<input type="text" id="fees" name="fees"> 
					 </div>
                                         <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>From Date<label>*</label></span>
                                                <input type="text" id="from" name="from" class="datepicker"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s" > 
						 <span>To Date<label>*</label></span>
						 <input type="text" id="to" name="to" class="datepicker"> 
					 </div>
                                      
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 
					   </a>
					 </div>
                             
				<div class="clearfix"> </div>
				<div class="register-but">
				   
                                    <input type="submit" value="Renew Pass" id="submit" name="submit" style="background-color:#6bd04e; color:white; width: 120px; height: 35px;">
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
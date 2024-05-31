<?php
include 'inc/connection.php';

session_start();
$id=$_SESSION["userid"];

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pass_type=$_POST['pass_type'];
    $fees=$_POST['fees'];
    $from=date('Y-m-d',  strtotime($_POST['from']));
    $to=date('Y-m-d',  strtotime($_POST['to']));
    
    ///idproof
    $idproof = $_FILES["idproof"]['name'];
    $ext_array=explode(".",$idproof);
    $ext = strtolower(end($ext_array));
    $tmp1 = $_FILES["idproof"]['tmp_name'];
    $path1="idproofs/$idproof";
    
    ///addressproof 
    $addressproof = $_FILES["addressproof"]['name'];
    $ext_array1=explode(".",$addressproof);
    $ext1 = strtolower(end($ext_array1));
    $tmp2 = $_FILES["addressproof"]['tmp_name'];
    $path2="addressproofs/$addressproof";
    
    if($ext!='pdf' || $ext1!='pdf')
    {
       echo "<script>alert('Something Went Wrong..');</script>";
    }
    else
    {
        //echo "INSERT INTO `pass_registration`(`fname`, `lname`, `pass_type`, `fees`, `from_date`, `to_date`, `idproof`, `addressproof`,`userid`) VALUES ('$fname','$lname','$pass_type','$fees','$from','$to','$idproof','$addressproof','$id') ";exit;
        move_uploaded_file($tmp1, $path1);
        move_uploaded_file($tmp2, $path2);
        
        
        $result= $con->query("select * from pass_registration where id='$id' and ( (from_date>='$from' and to_date<='$from') or (from_date>='$to' and to_date<='$to')) ");
        $rowcount=$result->num_rows;
        if($rowcount==0)
        {
            $exe= $con->query("INSERT INTO `pass_registration`(`fname`, `lname`, `pass_type`, `fees`, `from_date`, `to_date`, `idproof`, `addressproof`,`userid`) VALUES ('$fname','$lname','$pass_type','$fees','$from','$to','$idproof','$addressproof','$id') ");
            if($exe)
            {
                echo "<script>alert('Pass Registration done Successfully..');</script>"; 
            }
            else
            {
                echo "<script>alert('Something went wrong..');</script>"; 
            }
        }
        else
        {
             echo "<script>alert('Try Another Date..');</script>"; 
        }
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

        <style type="text/css">
          input[type="file"]
          {
            border: 1px solid #EEE;
    outline-color: #FF5B36;
    
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
                            <form method="post" enctype="multipart/form-data"> 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Pass Holder's First Name<label>*</label></span>
						<input type="text" id="fname" name="fname" required="" pattern="[a-zA-Z]{3,10}" title="First Name must be Valid"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Pass Holder's Last Name<label>*</label></span>
						<input type="text" id="lname" name="lname" required="" pattern="[a-zA-Z]{3,10}" title="Last Name must be Valid"> 
					 </div>
                                        <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Pass Type<label>*</label></span>
                  <select class="form-control" name="pass_type" id="pass_type" style="width: 433px;" onchange="getFees();" required="">
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
                                                <input type="text" id="from" name="from" class="datepicker" autocomplete="off" required=""> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s" > 
						 <span>To Date<label>*</label></span>
						 <input type="text" id="to" name="to" class="datepicker" autocomplete="off"> 
					 </div>
                                      
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 
					   </a>
					 </div>
                <div class="" style="position: relative;bottom: 34px;">
                  <br/>
						    <h3>NECESSARY DOCUMENTS</h3>
                <br/>
							 <div class="wow fadeInLeft" style="width: 433px;">
            <span>ID Proof<label>  &nbsp;(* pdf)</label></span>
								<input type="file" id="idproof" name="idproof" style="width: 433px;" accept="application/pdf" required="">
							 </div>
							 <div class="wow fadeInRight" style="position: relative; bottom: 63px;right: 58px; float: right" >
								<span>Address Proof<label> &nbsp;(* pdf)</label></span>
								<input type="file" id="addressproof" name="addressproof" style="width: 433px;" accept="application/pdf" required="">
							 </div>
					 </div>
                                
                                <div class="" style="position: relative;bottom: 34px;float: left">
					<br/><br/>
          <div class="wow fadeInLeft" data-wow-delay="0.4s">
                                                             
                                  <input type="checkbox" id="dec" name="dec" required="">&nbsp; <b>I Agree to the terms of services. </b>
							 </div>
							
					 </div>
				
				<div class="clearfix"> </div>
				<div class="register-but">
				   
                                    <input type="submit" value="submit" id="submit" name="submit" style="background-color:#6bd04e; color:white; width: 120px; height: 35px;">
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
<?php
include 'inc/connection.php';
session_start();
$id=$_SESSION["userid"];
$result= $con->query("select * from registration where id='$id'");
$user= $result->fetch_object();

if(isset($_POST["update"]))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $nat=$_POST['nationality'];
    $pincode=$_POST['pincode'];
    $gender=$_POST['gender'];
    
    $exe= $con->query("update registration set fname='$fname',lname='$lname',email='$email',contact='$contact',address1='$address1',address2='$address2',state='$state',city='$city',nationality='$nat',pincode='$pincode',gender='$gender' where id='$id'");
    if($exe)
    {
        echo "<script>alert('Profile Updated Successfully..');document.location='http://localhost/OBPS/profile.php';</script>"; 
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


</head>
<body>
  <?php include 'inc/header.php';?>
 <div class="content">
 <div class="contact">
 <div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>Edit Your Profile</h1></div>
                <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" style="" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://praxware.com">praxware.com</a></div>
          </div>
          
         
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">My Profile</a></li>
                <li><a data-toggle="tab" href="#messages">Menu 1</a></li>
                <li><a data-toggle="tab" href="#settings">Menu 2</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                             <br/>
                             <input type="text" class="form-control" name="fname" id="fname" placeholder="first name" value="<?php echo $user->fname; ?>" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                           <br/>
                           <input type="text" class="form-control" name="lname" id="lname" placeholder="last name" value="<?php echo $user->lname; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <br/>
                              <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter Phone" value="<?php echo $user->contact; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <br/>
                              <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email Id" value="<?php echo $user->email; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <br/>
                              
                              <textarea class="form-control" name="address1" placeholder="Enter Your Address 1:"></textarea>
                                  
                              </textarea>
                          </div>
                      </div>
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <br/>
                              <textarea class="form-control" name="address2" placeholder="Enter Your Address 2:"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              
                              <br/>
                            <select class="form-control" id="city" name="city">
                                <option value="">Select City</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                 <option value="Surat">Surat</option>
                                  <option value="Gandhinagar">Gandhinagar</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                          <br/>
                            <select class="form-control" id="state" name="state">
                                <option value="">Select State</option>
                                <option value="Gujarat">Gujarat</option>
                                 <option value="Maharastra">Maharastra</option>
                                  <option value="Rajasthan">Rajasthan</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                           <br/>
                              <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Your Pincode Here.." title="enter your last name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                           <br/>
                              <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Enter your Nationality" title="enter your last name if any.">
                          </div>
                      </div>
                      <div class="form-group" style="position: relative;top:15px;left:15px;">
                              <label class="radio-inline">
                                  <input type="radio" name="gender" value="male" >Male
    </label>
    <label class="radio-inline">
        <input type="radio" name="gender" value="female">Female
    </label>
    
                      </div>
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="update"><i class="glyphicon glyphicon-ok-sign"></i>Update</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>Cancel</button>
                                <br/><br/><br/>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
            
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
</div>
  </div>
	
	</div>
	<?php

        include 'inc/footer.php';
        ?>


 </body>
</html>
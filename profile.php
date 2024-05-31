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
    $dob=date('Y-m-d',  strtotime($_POST["dob"]));
    
    $exe= $con->query("update registration set fname='$fname',lname='$lname',email='$email',contact='$contact',address1='$address1',address2='$address2',state='$state',city='$city',nationality='$nat',pincode='$pincode',gender='$gender',dob='$dob' where id='$id'");
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
 
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dob" ).datepicker({
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
                        
                       $("#image").click(function()
                       {
                            //call a function to handle file upload on select file
                              $('input[type=file]').on('change', fileUpload);
                              // alert('hi');
                        }) ;
    
		});
                
                
                 
       
    
    function fileUpload(event)
    {
        //$("#dropBox").html(event.target.value+" uploading...");
        $("#pic_error").html("Your Image Is uploading...");
        
        //get selected file
        files = event.target.files;
        
        var data = new FormData();   
        
//        var url =  window.location.href;
//    var captured = /stu_id=([^&]+)/.exec(url)[1]; // Value is in [1] ('384' in our case)
//    var stu_id = captured ;
//        
//        data.append("stu_id", stu_id);
        //file data is presented as an array
        for (var i = 0; i < files.length; i++) {
        var file = files[i];
        if(!file.type.match('image.*')) {              
            //check file type
            $("#pic_error").html("Please choose an images file.");
        }else if(file.size > 1048576){
            //check file size (in bytes)
            $("#pic_error").html("Sorry, your file is too large (>1 MB)");
        }else{
            //append the uploadable file to FormData object
            data.append('image', file, file.name);
            
           //create a new XMLHttpRequest
            var xhr = new XMLHttpRequest();     
            
            //post file data for upload
            xhr.open('POST', 'upload.php', true);  
            xhr.send(data);
             xhr.onreadystatechange = AJAX_onreadystatechange;
            
          function AJAX_onreadystatechange() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        var response = JSON.parse(xhr.responseText);
                console.log(response);
                if(xhr.status === 200 && response.status == 'ok'){
               //alert(response.im);
               //return false;
               // document.getElementById("profilepic").innerHTML=response.im;
                
                document.getElementById("profilepic").src='profiles/'+response.im;
            
                    $("#pic_error").html("File has been uploaded successfully.");
                    $("#image").val('');
                    setTimeout(function(){ $("#pic_error").html(''); }, 2000);
                }
                else if(response.status == 'type_err'){
                    $("#pic_error").html("Please choose an images file. Click to upload another.");
                }
                else{
                    $("#pic_error").html("Some problem occured, please try again.");
                }
 
    }
}
            
//            xhr.onload = function () {
//               // alert('hhhh');
//                //get response and show the uploading status
//                var response = JSON.parse(xhr.responseText);
//                //console.log(response);return false;
//                if(xhr.status === 200 && response.status == 'ok'){
//               alert('hi');
//               // document.getElementById("profilepic").innerHTML=response.im;
//                
//                document.getElementById("profilepic").src='profiles/'+response.im;
//            
//                    $("#pic_error").html("File has been uploaded successfully.");
//                    setTimeout(function(){ $("#pic_error").html(''); }, 2000);
//                }
//                else if(response.status == 'type_err'){
//                    $("#pic_error").html("Please choose an images file. Click to upload another.");
//                }
//                else{
//                    $("#pic_error").html("Some problem occured, please try again.");
//                }
//            }
            
           
        };
    }
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
 <div class="contact">
 <div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>Edit Your Profile</h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
          <img src="<?php if($user->image=='') echo 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png';else echo 'profiles/'.$user->image; ?>" class="avatar img-thumbnail" alt="avatar" id="profilepic" height="136" width="262">
        
        <input type="file" class="text-center center-block file-upload" id="image" name="image">
          <label class="pic_error" id="pic_error" ></label>
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://praxware.com">www.praxware.com</a></div>
          </div>
          
          
        
               
         
                  </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
<!--                <li><a data-toggle="tab" href="#messages">Menu 1</a></li>
                <li><a data-toggle="tab" href="#settings">Menu 2</a></li>-->
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form"  method="post" id="registrationForm">
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
                              
                              <textarea class="form-control" name="address1" placeholder="Enter Your Address 1:"><?php echo $user->address1;?></textarea>
                                  
                              </textarea>
                          </div>
                      </div>
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <br/>
                              <textarea class="form-control" name="address2" placeholder="Enter Your Address 2:"><?php echo $user->address2;?></textarea>
                          </div>
                      </div>
                     <div class="form-group">
                          
                          <div class="col-xs-6">
                              
                              <br/>
                            <select class="form-control" id="city" name="city">
                                <option value="">Select City</option>
                                <option value="Ahmedabad" <?php if($user->city=='Ahmedabad') echo 'selected';?> >Ahmedabad</option>
                                 <option value="Surat" <?php if($user->city=='Surat') echo 'selected';?>>Surat</option>
                                  <option value="Gandhinagar" <?php if($user->city=='Gandhinagar') echo 'selected';?>>Gandhinagar</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                          <br/>
                            <select class="form-control" id="state" name="state">
                                <option value="">Select State</option>
                                <option value="Gujarat" <?php if($user->state=='Gujarat') echo 'selected';?>>Gujarat</option>
                                 <option value="Maharastra" <?php if($user->state=='Maharastra') echo 'selected';?>>Maharastra</option>
                                  <option value="Rajasthan" <?php if($user->state=='Rajasthan') echo 'selected';?>>Rajasthan</option>
                            </select>
                          </div>
                      </div>
                      
                     <div class="form-group">
                          
                          <div class="col-xs-6">
                           <br/>
                              <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Your Pincode Here.." title="enter your last name if any." value="<?php echo $user->pincode;?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                           <br/>
                           <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Enter your Nationality" title="enter your last name if any." value="<?php echo $user->nationality;?>">
                          </div>
                      </div>
                      
                       <div class="form-group">
                          
                          <div class="col-xs-6">
                          <br/>
                            <select class="form-control" id="gender" name="gender">
                               
                                <option value="male" <?php if($user->gender=='male') echo 'selected';?>>Male</option>
                                 <option value="female" <?php if($user->gender=='female') echo 'selected';?>>Female</option>
                                  
                            </select>
                          </div>
                      </div>
                      
                       <div class="form-group">
                          
                          <div class="col-xs-6">
                           <br/>
                           <input type="text" class="form-control" name="dob" id="dob" placeholder="Enter your DOB" >
                          </div>
                      </div>
<!--                      <div class="form-group" style="position: relative;top:15px;left:15px;">
                                <label class="radio-inline">
                                  <input type="radio" name="gender" value="male" >Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="female">Female
                                </label>
                      </div>-->
                      
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
<?php
include 'inc/connection.php';
error_reporting(0);
session_start();
$id=$_SESSION["id"];
if(isset($_POST['btnupdate']))
{
    
    $old=$_POST['oldp'];
    $new=$_POST['newp'];
    $rnew=$_POST['rnewp'];
   
        $result= $con->query("select * from login where password='$old' and id='$id'");
        $rowcount=$result->num_rows;
        if($rowcount==1)
        {
            if($new==$rnew)
            {
               $exe= $con->query("update login set password='$new' where id='$id'");
               if($exe)
               {
                    echo "<script>alert('Password Updated Successfully..');document.location='logout.php';</script>"; 
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
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Form_component :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php include 'inc/header.php';?>
<!--header end-->
<!--sidebar start-->
<?php include 'inc/sidebar.php';?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        
      

        

        <div class="row">
        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Update Your Password
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Old Password</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id='oldp' name="oldp" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">New Password</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id='newp' name="newp" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Re- Password</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id='rnewp' name="rnewp" required="">
                        </div>
                    </div>
                  
                  
                    <div class="form-group has-error">
                        <label class="col-sm-3 control-label col-lg-3" for="inputError"></label>
                        <div class="col-lg-6">
                            <br/>
                            <input type="submit" class="btn btn-primary" id="btnupdate" name='btnupdate' value="Update">
                             <input type="reset" class="btn btn-danger" id="btnsubmit" value="Cancel">
                        </div>
                    </div>
                    
                </form>
                
            </div>
        </section>

      

        </div>
        </div>



        <!-- page end-->
        </div>
</section>
 <!-- footer -->
		 <?php include 'inc/footer.php';?>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>

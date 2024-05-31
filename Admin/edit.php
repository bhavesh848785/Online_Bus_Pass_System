<?php
include 'inc/connection.php';

$id=$_GET["editid"];
$result= $con->query("select * from pass where id='$id'");
$row=$result->fetch_object();

$title=$row->title;
$duration=$row->duration;
$amount=$row->amount;

if(isset($_POST['btnupdate']))
{
    $title=$_POST['title'];
    $duration=$_POST['duration'];
    $amount=$_POST['amount'];
    
    $exe=$con->query("update `pass` set `title`='$title',`duration`='$duration',`amount`='$amount' where id='$id'");
    if($exe)
    {
        echo "<script>alert('Pass Updated Successfully..');document.location='http://localhost/OBPS/admin/all_pass.php';</script>"; 
    }
    else
    {
        echo "<script>alert('Something went wrong..');</script>"; 
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
                Add New Pass
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Pass Title &nbsp;(*)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $title;?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Duration &nbsp;(*)</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="duration" id="duration">
                                 <option value="1" <?php if($duration==1) echo 'selected';?>>1 Month</option>
                                 <option value="2" <?php if($duration==2) echo 'selected';?>>2 Month</option>
                                 <option value="3" <?php if($duration==3) echo 'selected';?>>3 Month</option>
                                 <option value="4" <?php if($duration==4) echo 'selected';?>>4 MOnth</option>
                                 <option value="5" <?php if($duration==5) echo 'selected';?>>5 Month</option>
                                 <option value="6" <?php if($duration==6) echo 'selected';?>>6 Month</option>
                                 <option value="7" <?php if($duration==7) echo 'selected';?>>7 Month</option>
                                 <option value="8" <?php if($duration==8) echo 'selected';?>>8 Month</option>
                                 <option value="9" <?php if($duration==9) echo 'selected';?>>9 Month</option>
                                 <option value="10" <?php if($duration==10) echo 'selected';?>>10 Month</option>
                                 <option value="11" <?php if($duration==11) echo 'selected';?>>11 Month</option>
                                 <option value="12" <?php if($duration==12) echo 'selected';?>>12 Month</option>
                                 
                                
                            </select>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Pass Amount &nbsp;(*)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $amount;?>">
                        </div>
                    </div>
                  
                    <div class="form-group has-error">
                        <label class="col-sm-3 control-label col-lg-3" for="inputError"></label>
                        <div class="col-lg-6">
                            <br/>
                            <input type="submit" class="btn btn-primary" id="btnupdate" name="btnupdate" value="Update Pass">
                             <input type="reset" class="btn btn-danger" id="btnreset" name="btnreset" value="Reset">
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

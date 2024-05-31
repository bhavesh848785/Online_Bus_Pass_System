<?php
include 'inc/connection.php';
$result= $con->query("select * from pass_registration where status='pending'");
?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
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
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     All Pass Registration Request
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Name</th>
            <th>Pass Type</th>
            <th>Fees</th>
            <th>From Date</th>
            <th>To Date</th>
            <th>IdProof</th>
            <th>AddressProof</th>
            <th>Status</th>
           
          </tr>
        </thead>
        <tbody>
            <?php
            while($row=$result->fetch_object())
            {
                ?>
                <tr>
                    <td><?php echo $row->id;?></td>
                    <td><?php echo $row->fname.' '.$row->lname;?></td>
                    <td><?php echo $row->pass_type."Month";?></td>
                    <td><?php echo $row->fees;?></td>
                    <td><?php echo $row->from_date;?></td>
                    <td><?php echo $row->to_date;?></td>
                    <td><a href="idproof.php?n=<?php echo $row->idproof;?>">IdProof</a></td>
                    <td><a href="addressproof.php?n=<?php echo $row->addressproof;?>">AddressProof</a></td>
                    <td><a href="change_status.php?id=<?php echo $row->id;?>"><?php echo $row->status;?></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
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

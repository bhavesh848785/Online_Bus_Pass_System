<?php
include 'inc/connection.php';
session_start();

//Set useful variables for paypal form
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_id = 'Sanjaymerchant@gmail.com'; //Business Email
$id=$_SESSION["userid"];

//echo "select * from pass_registration where userid='$id'";
//exit;
$result1= $con->query("select * from pass_registration where userid='$id'");
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
 <!-- registration -->
 <br>
 <br>
	<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                <b>  My Pass Registration Status</b></div>
            <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>
                <form action="<?php echo $paypal_url; ?>" method="post">

            <table class="table">
                <thead>
          <tr>
            <th data-breakpoints="xs">PassID</th>
          
            <th>Pass Type</th>
            <th>Fees</th>
            <th>From Date</th>
            <th>To Date</th>
            <th>IdProof</th>
            <th>AddressProof</th>
            <th>Status</th>
            <th>Remarks</th>
            <th>Payment</th>
            <th></th>
           
          </tr>
        </thead>
        <tbody>
            <?php
            while($row=$result1->fetch_object())
            {
                
                $to_date= $row->to_date;
                $current= date('Y-m-d');
                $status='';
                if($to_date<$current)
                {
                    $status='Expired';
                }
                //echo $status;exit;
                ?>
            
       <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $row->pass_type."Month";?>; ?>">
        <input type="hidden" name="item_number" value="<?php echo $row->id;?>">
        <input type="hidden" name="amount" value="<?php echo $row->fees;?>">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        
        <input type='hidden' name='return' value='http://localhost/OBPS/get_pass.php'>

        
        <!-- Display the payment button. -->
        





                <tr>
                    <td><?php echo $row->id;?></td>
                   
                    <td><?php echo $row->pass_type."Month";?></td>
                    <td><?php echo $row->fees;?></td>
                    <td><?php echo $row->from_date;?></td>
                    <td><?php echo $row->to_date;?></td>
                    <td><a href="idproof.php?n=<?php echo $row->idproof;?>">IdProof</a></td>
                    <td><a href="addressproof.php?n=<?php echo $row->addressproof;?>">AddressProof</a></td>
                    <td><b style="color:blue">
                        
                        <?php 
                                if($status=='')
                                {
                                     echo ucfirst($row->status);
                                }
                                else
                                {
                                    echo $status;
                                }
                        ?></b>
                    </td>
                    <td><?php echo $row->remarks;?></td>
                    <td>
                        <?php
                     
                                if($row->status=='approved')
                                {
                                    ?>
                                        <!-- <input type="image" name="submit" border="0"
                src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
                <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > -->

                <a href="payment.php" class="btn btn-danger">Pay Now</a>
                                    <?php
                                }
                                else
                                {
                                    if($status!='')
                                    {
                                       ?>
                <a href="pass_renew.php">Renew</a>
                                       <?php
                                    }
                                    else
                                    {
                                        echo '---';
                                    }
                                }
                        
                        
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
            </table>
                    </form>

        </div>
    </div>
</div> 
<br>
<!-- registration -->

  </div>
	
	</div>
        <br/><br/><br/><br/><br/><br/><br/><br/>
	<?php include 'inc/footer.php';?>



 </body>
</html>
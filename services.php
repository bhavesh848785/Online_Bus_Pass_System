
<!DOCTYPE HTML>
<html>
<head>
<title>E-PASS</title>
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
					$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
				</script>


</head>
<body>
  <?php include 'inc/header.php';?>
  <div class="how-section1 ">
                    <div class="row ">
                    	<center><h4 >our services</h4></center>
                    	<br>
                    	<br>
                        <div class="col-md-6 how-img">
                           
                       <a href=""> <img src="images/download2.jpg" class="rounded-circle img-fluid" alt=""/></a>
                        </div>
                        
                        <div class="col-md-6 how-img">

                          <img src="images/images-21.jpg" class="img-responsive" alt="" height="100">
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <br>
                            <br>
                            <h4>Hire A Bus</h4>
                            <br>
                                       
                        <p class="text-muted">Reality Travels offers facility for marriage, death event, picnic etc. at existing rates to the common people.The registration of the bus can be made at the office of Traffic General Section</p>
                        <h3 style="margin-top: 5px;">Special Events :</h3>
                        <p style="margin-top: 10px;">Marriage Function</p>
                        <p style="margin-top: 5px;">Birth Day Party</p>
                        <p style="margin-top: 5px;">Success Party</p>
                        <p style="margin-top: 5px;">Personal Tours</p>
                        </div>
                        <div class="col-md-6">
                        	<br>
                        	<br>
                            <h4>Tourist Coach</h4>
                                      <br>
                        	
                    <p class="text-muted">KSRTC Provides tourist bus is widely used all over india with.
                        Super Comfortable features
                        Stuffed with unique safety features
                        Fuel Efficient</p>

                            <p style="margin-top: 10px;">Historical Places</p>
                            <p style="margin-top: 10px;">Visiting Places</p>
                            <p style="margin-top: 10px;">Others</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                           <img src="../OBPS/images/images-22.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-6 how-img">
                           <img src="../OBPS/images/images-13.jpg" class="img-responsive" alt="">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <br>
                            <br>
                            <h4>Special Services</h4>
                                   
                            <br>
                                                    <p class="text-muted" style="text-align: justify;">Special Service Bus Driver Job Description, Career as a Special Service Bus Driver, Salary, Employment</p> 
                                                    <p class="text-muted" style="margin-top: 10px;">Bus drivers who work for charter companies make very few stops on their routes. Large groups of passengers board the bus at one or perhaps two stops. The drivers generally drop off all the passengers at the same destination and later make the return trips. Charter buses are hired for fairly long runs.</p>
                   
                        </div>
                        <div class="col-md-6">
                            <br>
                            <br>
                            <h4>Schemes</h4>
                                   
                            <br>
                                                    <p class="text-muted" style="text-align: justify;">Monthly Pass System,Quaterly Pass System, Travels as you Like Scheme, Plans for Students, Plans for womens and Childrens.</p> 
                                                    <p class="text-muted" style="margin-top: 10px;">Concession Scheme for students,womens,child and handicaped persons,Consession for blind, consession for deed and dumb, Consession for handicapped,for mentallly challenged people.</p>
                   
                        </div>
                    </div>
                   
                </div>


							<div class="services-section">

</div>
	
	</div>
	<?php include 'inc/footer.php';?>


 </body>
</html>
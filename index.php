
<!DOCTYPE html>
<html>
<head>
<title>Electrician Finder web application||Home Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
        manualControls: '#slider3-pager',
      });
    });
  </script> 
<div class="content">
	 <div class="container">  
		  <div class="slider">
			<!-- Slideshow 3 -->
			<ul class="rslides" id="slider">
			  <li><img src="images/1.jpg" alt="">
				<div class="caption">
					<h1>Image1</h1>
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			  <li><img src="images/2.jpg" alt="">
				<div class="caption">
					<h1>Image2</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>	      
			  <li><img src="images/3.jpg" alt="">
				<div class="caption">
					<h1>Image3</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			  <li><img src="images/4.jpg" alt="">
				<div class="caption">
					<h1>Image1</h1>
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			</ul>
			<!-- Slideshow 3 Pager --></br></br>
			<!-- <ul id="slider3-pager">
			  <li><a href="#"><img src="images/5.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/22.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/1010.jpg" alt=""></a></li>
			   <li><a href="#"><img src="images/55.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/88.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/11.jpg" alt=""></a></li>
			</ul>    -->
				<div class="clearfix"></div>
		  </div>
	 </div>
	<?php include_once('includes/footer.php');?>
</div>
<!---->

<!---->
</body>
</html>
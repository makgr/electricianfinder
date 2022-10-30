<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Online DJ Management System || DJ Services</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,100,200' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

</head>
<body>
<?php include_once('includes/header.php');?>
<div class="event content">
	 <div class="container">  
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Services</li>	  
		 </ol>
		 <h2>Services</h2>
		 <div class="event-main">
		 	<?php
$sql="SELECT * from tblservice";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
			 <div class="event-grids">
					<div class="col-md-3 event-grid">
						
						<ul>
							<li class="hedding"><?php  echo htmlentities($row->ServiceName);?></li>
							
						</ul>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 event-grid small-text">
						<p><?php  echo htmlentities($row->SerDes);?></p>
					</div>
					<div class="col-md-2 event-grid large-text">
						<p class="text">$ <?php  echo htmlentities($row->ServicePrice);?> USD</p>
					</div>
					<div class="col-md-3 event-grid text-button">
						<ul>
						
							<li class="button yellow"><a href="book-services.php?bookid=<?php echo $row->ID;?>">Book Services</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
			  </div>
			  <?php $cnt=$cnt+1;}} ?>
			 
					  
		 </div>		 
		
		 <?php include_once('includes/footer.php');?>	
	 </div>
</div>
<!---->

<!---->
</body>
</html>
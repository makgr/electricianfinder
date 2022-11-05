<?php
session_start();
// error_reporting(0);

include('includes/dbconnection.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electricianfinder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {

	$thana_id = $_POST['thana_id'];

	$sql = "SELECT * FROM tblelectrician WHERE thana = '$thana_id'";

	$result = $conn->query($sql);
}

// $conn->close();

?>
<!DOCTYPE html>
<html>

<head>
	<title>Electrician Finder web application || FInd Electrician</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<script src="js/jquery.min.js"></script>

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
	<?php include_once('includes/header.php'); ?>
	<div class="event content">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Find electrician</li>
			</ol>
			<h2>Services</h2>
			<div class="event-main">

				<div class="contact-grids">
					<div class="col-md-6 contact-left">
						<p>Find electrician by location </p>
						<form method="post">
							<ul>
								<li class="text-info">Location:</li>
								<li><select type="text" class="form-control" name="thana_id" required="true">
										<option value="">Choose Location</option>
										<option value="1">Dhaka</option>
										<option value="2">Savar</option>
										<option value="3">Gazipur</option>

									</select></li>
							</ul>
							<input type="submit" name="submit" value="Search">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>

			</div>
			<div class="event-main">
				<?php
				if(isset($result)){
				if (mysqli_num_rows($result) > 0) {
					foreach ($result as $row) {               ?>
						<div class="event-grids">
							<div class="col-md-3 event-grid">
								<ul>
									<li class="hedding"><?php echo $row['name']; ?></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 event-grid small-text">
								<p><?php echo $row['email']; ?></p>
							</div>
							<div class="col-md-2 event-grid large-text">
								<p class="text"><?php echo $row['phone']; ?></p>
							</div>
							<div class="col-md-2 event-grid large-text">
								<p class="text"><?php echo $row['address']; ?></p>
							</div>
							<div class="col-md-2 event-grid large-text">
								<p class="text"><?php echo $row['specialization_area']; ?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
				<?php 
					
						}
					}
				 }
				?>


			</div>

			<?php include_once('includes/footer.php'); ?>
		</div>
	</div>
	<!---->

	<!---->
</body>

</html>
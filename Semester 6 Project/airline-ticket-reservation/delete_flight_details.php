<?php
session_start();
?>
<html>

<head>
	<title>
		Delete Flight Schedule Details
	</title>
	<style>
		input {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 7px 10px;
		}

		input[type=submit] {
			background-color: #030337;
			color: white;
			border-radius: 4px;
			padding: 7px 45px;
			margin: 0px 215px
		}

		input[type=date] {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 5.5px 30px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
	<img class="logo" src="images/shutterstock_22.jpg" />
	<h1 id="title">
		PIA AIRLINES
	</h1>
	<div>
		<ul>
			<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
			<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
		</ul>
	</div>

	<div class="container-fluid mx-5">
		<div class="row">
			<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<h2>ENTER THE FLIGHT SCHEDULE TO BE DELETED</h2>
				<br><br>
			</div>
			<br><br>
			<form action="admin_view_booked_tickets_form_handler.php" method="post">

				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<?php
					if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
						echo "<strong style='color:green; padding-left:20px;'>The Flight Schedule has been successfully deleted.</strong>
							<br>
							<br>";
					} else if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
						echo "<strong style='color:red; padding-left:20px;'>*Invalid Flight No./Departure Date, please enter again.</strong>
							<br>
							<br>";
					}
					?>
				</div>

				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<h4>Enter a valid Flight No.</h4>
					<h4><input type="text" name="flight_no" required></h4>
				</div>
				<br>

				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<h4>Enter the Departure Date</h4>
					<h4><input type="date" name="departure_date" required></h4>
				</div>
				<br>

				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<input type="submit" value="Delete" name="Delete">
				</div>

				

			</form>

		</div>

	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
		integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
		integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
		crossorigin="anonymous"></script>
</body>

</html>
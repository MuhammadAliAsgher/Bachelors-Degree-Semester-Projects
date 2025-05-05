<?php
session_start();
?>
<html>

<head>
	<title>
		Welcome Administrator
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<style>
		.col {
			padding: 1rem;
			background-color: #33b5e5;
			border: 2px solid #fff;
			color: #fff;
		}
	</style>
</head>

<body>
	<img class="logo" src="images/shutterstock_22.jpg" />
	<h1 id="title">
		PIA Airways </h1>
	<div>
		<ul>
			<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
			<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
		</ul>
	</div>
	<div class='col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12'></div>
	<h2>Welcome Administrator!</h2>
	</div>



	<div class="container-fluid mx-5">
		<div class="row">
			<a href="admin_view_booked_tickets.php" class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12">
				<div class="col  admin_func" href><i class="fa fa-plane" aria-hidden="true"></i> View List of Booked
					Tickets for a Flight
				</div>
			</a>

			<a href="add_flight_details.php" class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> Add
					Flight Schedule Details</div>
			</a>

			<a href="#" class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> Modify
					Flight Schedule Details</div>
			</a>

			<a href="delete_flight_details.php"
				class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12 admin_func">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> Delete Flight Schedule
					Details</div>
			</a>

			<a href="add_jet_details.php" class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12 admin_func">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> Add
					Aircrafts Details</div>
			</a>

			<a href="#" class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12 admin_func">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> Edit
					Aircrafts Details</div>
			</a>

			<a href="activate_jet_details.php"
				class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12 admin_func">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> Add
					Activate Aircraft</div>
			</a>

			<a href="deactivate_jet_details.php"
				class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12 admin_func">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> Add
					Deactivate Aircraft</div>
			</a>

			<a href="activate_jet_details.php"
				class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12 admin_func">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> Edit
			User Account</div>
			</a>

			<a href="deactivate_jet_details.php"
				class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12 admin_func">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> Delete
			User Account</div>
			</a>
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
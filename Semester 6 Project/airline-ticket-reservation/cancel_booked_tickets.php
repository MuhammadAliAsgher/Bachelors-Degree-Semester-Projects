<?php
session_start();
?>
<html>

<head>
	<title>
		Cancel Booked Tickets
	</title>
	<style>
		input {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 7px 30px;
		}

		input[type=submit] {
			background-color: #030337;
			color: white;
			border-radius: 4px;
			padding: 7px 45px;
			margin: 0px 68px
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
			<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
			<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
			<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
			<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
		</ul>
	</div>
	<div class="container-fluid mx-5">
		<div class="row">
			<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<h2>CANCEL BOOKED TICKETS</h2>
			</div>
			<br>

			<form action="admin_view_booked_tickets_form_handler.php" method="post">
				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<?php
					if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
						echo "<strong style='color: red'>*Invalid PNR, please enter PNR again</strong>
						<br>
						<br>";
					}
					?>
				</div>
				<br><br>
				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<h4>Enter the PNR</h4>
					<h4><input type="text" name="pnr" required></h4>
				</div>
				<br>
				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 "></div>
				<input type="submit" value="Cancel Ticket" name="Cancel_Ticket">
				<br>

			</form>
		</div>
	</div>
	<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS

		-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
		integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
		integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
		crossorigin="anonymous"></script>
</body>

</html>
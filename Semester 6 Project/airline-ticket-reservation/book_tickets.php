<?php
session_start();
?>
<html>

<head>
	<title>
		View Available Flights
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
			margin: 0px 127px
		}

		input[type=date] {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 5.5px 44.5px;
		}

		select {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 6.5px 75.5px;
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
				<h2>SEARCH FOR AVAILABLE FLIGHTS</h2>

			</div>
			<br><br>
			<form action="view_flights_form_handler.php" method="post">

				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<table cellpadding="5">
						<tr>
							<td class="fix_table">Enter the Origin</td>
							<td class="fix_table">Enter the Destination</td>
						</tr>
						<tr>
							<td class="fix_table">
								<input list="origins" name="origin" placeholder="From" required>
								<datalist id="origins">
									<option value="bangalore">
								</datalist>
								<!-- <input type="text" name="origin" placeholder="From" required> -->
							</td>
							<td class="fix_table">
								<input list="destinations" name="destination" placeholder="To" required>
								<datalist id="destinations">
									<option value="mumbai">
									<option value="mysore">
									<option value="mangalore">
									<option value="chennai">
									<option value="hyderabad">
								</datalist>
								<!-- <input type="text" name="destination" placeholder="To" required> -->
							</td>
						</tr>
					</table>
				</div>
				<br>

				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<table cellpadding="5">
						<tr>
							<td class="fix_table">Enter the Departure Date</td>
							<td class="fix_table">Enter the No. of Passengers</td>
						</tr>
						<tr>
							<td class="fix_table"><input type="date" name="dep_date" min=<?php
							$todays_date = date('Y-m-d');
							echo $todays_date;
							?> max=<?php
							 $max_date = date_create(date('Y-m-d'));
							 date_add($max_date, date_interval_create_from_date_string("90 days"));
							 echo date_format($max_date, "Y-m-d");
							 ?> required></td>
							<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required>
							</td>
						</tr>
					</table>
				</div>
				<br>

				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<table cellpadding="5">
						<tr>
							<td class="fix_table">Enter the Class</td>
						</tr>
						<tr>
							<td class="fix_table">
								<select name="class">
									<option value="economy">Economy</option>
									<option value="business">Business</option>
								</select>
							</td>
						</tr>
					</table>
				</div>

				<div><br></div>

				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<input type="submit" value="Search for Available Flights" name="Search">
				</div>



			</form>

		</div>

	</div>

	<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
		integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
		integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
		crossorigin="anonymous"></script>
</body>

</html>
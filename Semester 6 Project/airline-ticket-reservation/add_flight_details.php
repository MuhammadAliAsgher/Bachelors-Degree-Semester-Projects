<?php
session_start();
?>
<html>

<head>
	<title>
		Add Flight Schedule Details
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
			margin: 0px 200px
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
				<h2>ENTER THE FLIGHT SCHEDULE DETAILS</h2>
				<br><br>
			</div>

			<form action="add_flight_details_form_handler.php" method="post">
				<?php
				if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
					echo "<strong style='color: green'>The Flight Schedule has been successfully added.</strong>
						<br>
						<br>";
				} else if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
					echo "<strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong>
						<br>
						<br>";
				}
				?>

				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<table cellpadding="5">
						<tr>
							<td class="fix_table">Flight Number</td>
						</tr>
						<tr>
							<td class="fix_table"><input type="text" name="flight_no" required></td>
						</tr>
					</table>
					<br>
					<hr>
					<table cellpadding="5">
						<tr>
							<td class="fix_table">Origin</td>
							<td class="fix_table">Destination</td>
						</tr>
						<tr>
							<td class="fix_table"><input type="text" name="origin" required></td>
							<td class="fix_table"><input type="text" name="destination" required></td>
						</tr>
					</table>
					<br>
					<hr>
					<table cellpadding="5">
						<tr>
							<td class="fix_table">Departure Date</td>
							<td class="fix_table">Arrival Date</td>
						</tr>
						<tr>
							<td class="fix_table"><input type="date" name="dep_date" required></td>
							<td class="fix_table"><input type="date" name="arr_date" required></td>
						</tr>
					</table>
					<br>
					<hr>
					<table cellpadding="5">
						<tr>
							<td class="fix_table">Departure Time</td>
							<td class="fix_table">Arrival Time</td>
						</tr>
						<tr>
							<td class="fix_table"><input type="time" name="dep_time" required></td>
							<td class="fix_table"><input type="time" name="arr_time" required></td>
						</tr>
					</table>
					<br>
					<hr>
					<table cellpadding="5">
						<tr>
							<td class="fix_table">Number of Seats in Economy Class</td>
							<td class="fix_table">Number of Seats in Business Class</td>
						</tr>
						<tr>
							<td class="fix_table"><input type="number" name="seats_eco" required></td>
							<td class="fix_table"><input type="number"" name=" seats_bus" required></td>
						</tr>
					</table>
					<br>
					<hr>
					<table cellpadding="5">
						<tr>
							<td class="fix_table">Ticket Price(Economy Class)</td>
							<td class="fix_table">Ticket Price(Business Class)</td>
						</tr>
					</table>
					<table cellpadding="5">
						<tr>
							<td class="fix_table">
								<input type="number" name="price_eco" required>
							</td>
							<td class="fix_table">
								<input type="number" name="price_bus" required>
							</td>
						</tr>
					</table>
					<br>
					<hr>
					<table cellpadding="5">
						<tr>
							<td class="fix_table">Jet ID</td>
						</tr>
						<tr>
							<td class="fix_table">
								<input type="text" name="jet_id" required>
							</td>
						</tr>
					</table>
					<br>
					<hr>
					<input type="submit" value="Submit" name="Submit">
				</div>
			</form>


		</div>

	</div>
	
	<!--check out addling local host in links and other places

		-->

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
		integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
		integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
		crossorigin="anonymous"></script>
</body>

</html>
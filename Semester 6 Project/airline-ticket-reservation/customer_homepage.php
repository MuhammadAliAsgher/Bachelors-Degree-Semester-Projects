<?php
session_start();
// if($_SESSION['login_user']==null){
// 	header('location:home_page.php');
// }
?>
<html>

<head>
	<title>
		Welcome Customer
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
	<img class="logo" src="images/shutterstock_22.jpg" width="50%" />
	<h1 id="title">
		PIA Airways
	</h1>
	<div>
		<ul>
			<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
			<li><a href="pnr.php"><i class="fa fa-desktop" aria-hidden="true"></i> Print Ticket</a></li>
			<li><a href="customer_homepage.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
			<li><a href="customer_homepage.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
			<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
		</ul>
	</div>
	<?php
	echo "<div class='container my-5'>";
	echo "<div class='row'>";
	echo "<div class='col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
	echo "<h2>Welcome " . $_SESSION['login_user'] . "</h2>";
	echo "</div>";
	require_once ('Database Connection file/mysqli_connect.php');
	$query = "SELECT count(*),frequent_flier_no,mileage FROM Frequent_Flier_Details WHERE customer_id=?";
	$stmt = mysqli_prepare($dbc, $query);
	mysqli_stmt_bind_param($stmt, "s", $_SESSION['login_user']);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt, $cnt, $frequent_flier_no, $mileage);
	mysqli_stmt_fetch($stmt);
	if ($cnt == 1) {
		echo "<div class='col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
		echo "<h4 style='padding-left: 20px;'>Frequent Flier No.: " . $frequent_flier_no ."</h4><br>";
		echo "</div>";
		echo "<div class='col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
		echo "<h4 style='padding-left: 20px;'>Mileage: " . $mileage . "</h4>";
		echo "</div>";
	}
	mysqli_stmt_close($stmt);
	mysqli_close($dbc);
	?>

	<div class="container-fluid mx-5">
		<div class="row">
			<a href="book_tickets.php" 
			class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12">
				<div class="col  admin_func" href><i class="fa fa-plane" aria-hidden="true"></i> Book Flight Tickets
				</div>
			</a>

			<a href="view_booked_tickets.php"
				class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> View Booked Flight Tickets</div>
			</a>

			<a href="pnr.php" 
			class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12 admin_func">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> Print Booked Tickets</div>
			</a>

			<a href="cancel_booked_tickets.php"
				class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-12 admin_func">
				<div class="col  admin_func"><i class="fa fa-plane" aria-hidden="true"></i> Cancel Booked Flight Tickets</div>
			</a>
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
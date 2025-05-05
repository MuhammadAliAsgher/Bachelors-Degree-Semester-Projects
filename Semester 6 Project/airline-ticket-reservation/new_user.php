<html>

<head>
	<title>
		Create New User Account
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
			margin: 0px 135px
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
		PIA Airways</h1>
	<div>
		<ul>
			<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
			<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
			<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
			<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
		</ul>
	</div>
	<br>
	<div class="container-fluid mx-5">
		<div class="row">
			<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<h2><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h2>

			</div>
			<br><br>
			<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">

				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<table cellpadding='10'>
						<strong>ENTER LOGIN DETAILS</strong>
						<tr>
							<td>Enter a valid username </td>
							<td><input type="text" name="username" required><br><br></td>
						</tr>
						<tr>
							<td>Enter your desired password </td>
							<td><input type="password" name="password" required><br><br></td>
						</tr>
						<tr>
							<td>Enter your email ID</td>
							<td><input type="text" name="email" required><br><br></td>
						</tr>
					</table>
				</div>
				<br>

				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<table cellpadding='10'>
						<strong>ENTER CUSTOMER'S PERSONAL DETAILS</strong>
						<tr>
							<td>Enter your name </td>
							<td><input type="text" name="name" required><br><br></td>
						</tr>
						<tr>
							<td>Enter your phone no.</td>
							<td><input type="text" name="phone_no" required><br><br></td>
						</tr>
						<tr>
							<td>Enter your address</td>
							<td><input type="text" name="address" required><br><br></td>
						</tr>
					</table>
				</div>


				<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<input type="submit" value="Submit" name="Submit">
				</div>
				<br>




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
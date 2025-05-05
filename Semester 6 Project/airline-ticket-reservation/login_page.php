<h3?php session_start(); ?>
	<html>

	<head>
		<title>
			Account Login
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
				margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous" />
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>

	<body>
		<img class="logo" src="images/pia_logo.png" />
		<h1 id="title">
			PIA Airways </h1>
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
					<h4>Login</h4>

				</div>
				<br><br>
				<form class="float_form" style="padding-left: 40px" action="login_handler.php" method="POST">

					<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<h5>Username:.</h5>
						<h5><input type="text" name="username" placeholder="Enter your username" required><br></h5>
					</div>
					<br>

					<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<h5>Password</h5>
						<h5><input type="password" name="password" placeholder="Enter your password" required><br><br>
						</h5>
					</div>


					<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<h5>User Type</h5>
						<h5>
							Customer <input type='radio' name='user_type' value='Customer' checked /> Administrator
							<input type='radio' name='user_type' value='Administrator' />
						</h5>
					</div>
					<br>

					<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<?php
						if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
							echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
						}
						?>
					</div>

					<div class="g-recaptcha" class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"
						data-sitekey="6LeBxNkpAAAAAIG1RsCh66yvABGcZLKIuOkIaCbo"></div>

					<br>


					<div class="col col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<input type="submit" value="Submit" name="Login" class="btn btn-primary btn-lg">
					</div> <br>

					<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User
						Account?</a>



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
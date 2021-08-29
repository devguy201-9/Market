<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Market</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<div id="Result"></div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" id="id-form-register" method="POST" action="">
					<span class="login100-form-title">
					Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Your's Fullname is required">
						<input class="input100" type="text" name="id" placeholder="Your's Fullname" id="fullNameCustomer">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" id="passwordCustomer">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Address is required">
						<input class="input100" type="text" name="id" placeholder="Address" id="addressCustomer">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "City is required">
						<input class="input100" type="text" name="id" placeholder="City" id="cityCustomer">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-o" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						Register
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="login.php">
							Login your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					<div class="text-center">
						<a class="txt2" href="index.php">
							Home
							<i class="fa fa-home m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/main2.js"></script>
	<script>
		$(document).ready(function() {
			//submit register
			$("#id-form-register").submit(function(event) {
                event.preventDefault(); //prevent default action 
                var post_url = $(this).attr("action"); //get form action url
                $.post("customer/loginOrRegister.php", {
                    fullNameCustomer: $("#fullNameCustomer").val(),
                    passwordCustomer: $("#passwordCustomer").val(),
                    addressCustomer: $("#addressCustomer").val(),
                    cityCustomer: $("#cityCustomer").val()
                }, function(data) {
                    $("#Result").html(data);
                });
            });

		});
	</script>
</body>
</html>
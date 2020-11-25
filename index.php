<?php
include_once "includes/autoload.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Web Application</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="util.css">
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form" method="POST" action="">
					<span class="login100-form-title p-b-26">
						Sign-Up As A Mentor<br>
					</span>
					<div class="wrap-input100 ">
						<input class="input100" type="text" name="firstname" required placeholder="First Name">
						<span class="focus-input100" ></span>
					</div>
					<div class="wrap-input100 ">
						<input class="input100" type="text" name="secondname" required placeholder="Second Name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 ">
						<input class="input100" type="text" name="username" required placeholder="Your Desired Username">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 ">
						<input class="input100" type="text" name="email" required placeholder="@Your Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 ">
						<input class="input100" type="password" name="password" required placeholder="Your Desired Password">
						<span class="focus-input100" ></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn"  name="submit">
								Sign Up
							</button>
						</div>
					</div>
					<div class="text-center p-t-6">
						<a class="txt2" href="Mentee-signup.php">
							Sign Up As A Mentee
						</a>
					</div>
					<a class="txt2" href="mentor-login.php">
							Already Have An Account? Login
						</a>
				</form>
			</div>
		</div>
	</div>
    <?php
    if(isset($_POST['submit'])){
        include "classes/dbh.class.php";

        $firstname =  $_POST['firstname'];
        $secondname = $_POST['secondname'];
        $username =$_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $obj = new Database();
        $obj->insertReg($firstname,$secondname,$username,$email,$password);
    }
    ?>
</body>
</html>
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
						Login As A Mentor<br>
					</span>
					<div class="wrap-input100 ">
						<input class="input100" type="text" name="username" required placeholder="Your Username">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 ">
						<input class="input100" type="password" name="password" required placeholder="Your Password">
						<span class="focus-input100" ></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn"  name="login-mentor-submit">
								Login
							</button>
						</div>
					</div>
					<div class="text-center p-t-6">
						<a class="txt2" href="mentee-login.php">
						Login As A Mentee
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    <?php
    if(isset($_POST['login-mentor-submit'])){
        include "classes/dbh.class.php";
        $username =$_POST['username'];
        $password = $_POST['password'];
        $obj = new Database();
        $obj->LoginMentor($username,$password);
    }
    ?>
</body>
</html>
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
            <h2 class="text-center">Your Mentors</h2><br>
                <?php
        $obj = new Database();
        $obj->Fetch();
    ?>
			</div>
		</div>
	</div>
    
</body>
</html>
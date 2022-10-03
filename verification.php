<?php

	$registerName = $_POST['registerName'];
	$registerEmail = $_POST['registerEmail'];
	$regiterPassword = $_POST['registerPassword'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Signup</title>
</head>
<body>
<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
		<div class="form-holder">
			<form method="post" action="verification.php">
				<input type="text" class="input" placeholder="Name" name="registerName" />
				<input type="email" class="input" placeholder="Email" name="registerEmail" />
				<input type="password" class="input" placeholder="Password" name="registerPassword" />
			</form>
		</div>
		<button class="submit-btn">Sign up</button>
	</div>
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>Log in</h2>
			<div class="form-holder">
                <form method="post" action="verification.php">
				    <input type="email" class="input" placeholder="Email" />
				    <input type="password" class="input" placeholder="Password" />
                </form>
			</div>
			<button class="submit-btn">Log in</button>
		</div>
	</div>
</div>
<script src="./js/style.js"></script>
</body>
</html>
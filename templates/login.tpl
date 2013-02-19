<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8" />
	<meta name="Designer" content="PremiumPixels.com">
	<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
	<link rel="stylesheet" type="text/css" href="varios/css/login/reset.css">
	<link rel="stylesheet" type="text/css" href="varios/css/login/structure.css">
</head>

<body>
	<form class="box login" action="businessLayer/login.php" name="login" method="post">

		
		{$messagelogin}
		<fieldset class="boxBody">
			<label>Username</label>
			<input name='user' type="text" tabindex="1" placeholder="Enter your user" required>
			<label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
			<input name='pass' type="password" tabindex="2" required>
		</fieldset>
		<footer>
			<label><input type="checkbox" tabindex="3">Keep me logged in</label>
			<input type="submit" class="btnLogin" value="Login" tabindex="4">

		</footer>
	</form>
	<footer id="main">

	</footer>
</body>
</html>

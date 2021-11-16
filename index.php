<?php include 'koneksi.php';?>
<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>SPK SD Takhassus Al-Qur'an</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="style.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo1.png">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Login Admin</h2>

		<form action="session.php" method="POST">
			<fieldset>
				<p><label for="username">Username</label></p>
				<p><input type="username" id="username" name="username" value="username" onBlur="if(this.value=='')this.value='username'" onFocus="if(this.value=='username')this.value=''"></p> <!-- JS because of IE support; better: placeholder="username" -->

				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" name="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->

				<button type="submit" class="">Login</button>
			</fieldset>
		</form>

	</div> <!-- end login -->

</body>	
</html>
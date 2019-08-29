<html> <!DOCTYPE HTML>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="/templates/DynaHotel/include/index.css">
		<link rel="icon" href="/templates/DynaHotel/images/interactive.ico" type="image/x-icon" />
		<title>DynaHotel - Login</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row wrap">
				<div class="col-2"> </div>
				<div class="col-4 text-center">
					<form class="form-signin" method="post">
						<img class="logo" src="templates/DynaHotel/images/logo2.png"><br>
						<span><b>Welkom back!</b></span>
						<?php if (isset($_POST['login'])) { ?>
						<div style="max-width: auto;"class="alert alert-danger" role="alert">
							<?php User::Login(); ?><br>
						</div>
						<?php } ?>
						<label for="inputEmail" class="sr-only"></label>
						<input type="username" id="username" name="username" class="form-control" placeholder="Your username"  autofocus id="username" name="username">
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Your password" id="username" name="username">
						<a href="register">Dont have an account yet?</a><br>
						<button class="btn btn-lg btn-success btn-block" type="submit" name="login">LOGIN</button>
						<p class="mt-5 mb-3 text-muted">&copy; DYNAHOTEL 2018, made with &hearts; </p>
					</form>
				</div>
				<div class="col-1"> </div>
				<div class="col-4 text-justify side pil">
					<h2 class="pilhead"><img src="templates\DynaHotel\images\icons\star.gif"> Welkom to Dyna!</h2>
					<img src="templates/DynaHotel/images/security/franksplaca.gif" style="float: right;">
					<p>Here at Dyna Hotel, we are a small community hotel, just like Habbo but our coin currency is free! Along with friendly management that keep the hotel running smooth. Our bullying and advertising policy is kept at a strict level to prevent such occuring on the hotel. For more information on the rules, Click Here. We are here to give you the best ultimate experience for you and your friends. The community holds events and competitions to make it more of a fun place to hang out. </p>
				</div>
			</div>
			<div class="row">
				<div class="col text-justify pil" style="margin-left: 40px; margin-right: 40px;">
					<h2 class="pilhead"><img src="templates\DynaHotel\images\icons\mis.png"> News:</h2>
					<img style="float: left;"src="templates\DynaHotel\images\staff\frank_04.gif">
					<img style="float: right;"src="templates\DynaHotel\images\star.gif">
					Here at Dyna Hotel, we are a small community hotel, just like Habbo but our coin currency is free! Along with friendly management that keep the hotel running smooth. Our bullying and advertising policy is kept at a strict level to prevent such occuring on the hotel. For more information on the rules, Click Here. We are here to give you the best ultimate experience for you and your friends. The community holds events and competitions to make it more of a fun place to hang out.
					
				</div>
			</div>
		</div>
	</body>
</html>
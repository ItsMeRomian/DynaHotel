<html> <!DOCTYPE HTML>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="/templates/DynaHotel/include/index.css">
		<link rel="icon" href="/templates/DynaHotel/images/interactive.ico" type="image/x-icon" />
		<title>DynaHotel - Register</title>
	</head>
	<body>
		<div class="row wrap">
			<div class="col-2"> </div>
			<div class="col-4 text-center">
				<form class="form-signin" method="post">
					<a href="/index"><img class="logo" src="templates/DynaHotel/images/logo2.png"></a><br><br>
					<?php if (isset($_POST['register'])) { ?>
					<div style="max-width: auto;"class="alert alert-danger" role="alert">
						<?php User::Register(); ?><br>
					</div>
					<?php } ?>
					<input type="username" id="username" name="username" class="form-control" placeholder="Your username" autofocus>
					<input type="username" id="email" name="email" class="form-control" placeholder="Your email" >
					<input type="password" name="password" id="password" class="form-control" placeholder="Your password">
					<input type="password" name="password_repeat" id="password" class="form-control" placeholder="your password (again)">
					<button class="btn btn-lg btn-success btn-block" type="submit" name="register">REGISTER</button>
					<p class="mt-5 mb-3 text-muted">&copy; DYNAHOTEL 2018</p>
				</form>
			</div>
			<div class="col-1"> </div>
			<div class="col-4 text-justify side pil">
				<h2 class="pilhead">Regels om te registeren:</h2>
				<img src="templates/DynaHotel/images/security/franksplaca.gif" style="float: right;">
				<p>Here at Dyna Hotel, we are a small community hotel, just like Habbo but our coin currency is free! Along with friendly management that keep the hotel running smooth. Our bullying and advertising policy is kept at a strict level to prevent such occuring on the hotel. For more information on the rules, Click Here. We are here to give you the best ultimate experience for you and your friends. The community holds events and competitions to make it more of a fun place to hang out. </p>
			</div>
		</div>
		<div class="row wrap">
			<div class="col">
				<div class="text-justify side pil" style="margin: 10px;">
					<h2 class="pilhead">Welkom in Dyna!</h2>
					<img src="templates/DynaHotel/images/staff/frank_02.gif" style="float: right;">
					<p>Here at Dyna Hotel, we are a small community hotel, just like Habbo but our coin currency is free! Along with friendly management that keep the hotel running smooth. Our bullying and advertising policy is kept at a strict level to prevent such occuring on the hotel. For more information on the rules, Click Here. We are here to give you the best ultimate experience for you and your friends. The community holds events and competitions to make it more of a fun place to hang out.
					<br>Here at Dyna Hotel, we are a small community hotel, just like Habbo but our coin currency is free! Along with friendly management that keep the hotel running smooth. Our bullying and advertising policy is kept at a strict level to prevent such occuring on the hotel. For more information on the rules, Click Here. We are here to give you the best ultimate experience for you and your friends. The community holds events and competitions to make it more of a fun place to hang out. </p>
				</div>
			</div>
		</div>
	</body>
</html>
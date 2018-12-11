<?php //include_once("include.php");  ?>	
<html>
	<!DOCTYPE HTML>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="/templates/DynaHotel/include/index.css">
	</head>
	<body class="text-center">
		<form class="form-signin" style="max-width: 400px;"method="post">
			<img class="logo" src="templates/martin/styling/images/logo.gif" alt="" ><br><br>
			<?php if (isset($_POST['register'])) { ?>
			<div style="max-width: auto;"class="alert alert-danger" role="alert">
				<?php User::Register(); ?><br>
			</div>
			<?php } ?>
			<input type="username" id="username" name="username" class="form-control" placeholder="Je gebruikersnaam" autofocus>
			<input type="username" id="email" name="email" class="form-control" placeholder="Je Email" >
			<input type="password" name="password" id="password" class="form-control" placeholder="Je wachtwoord">
			<input type="password" name="password_repeat" id="password" class="form-control" placeholder="Nog een keer je wachtwoord dankje ahaha">
			<button class="btn btn-lg btn-success btn-block" type="submit" name="register">REGISTER</button>
			<p class="mt-5 mb-3 text-muted">&copy; DYNAHOTEL 2018</p>
		</form>
	</body>
</html>
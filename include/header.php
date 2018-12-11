<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/templates/DynaHotel/include/style.css">
	</head>
	<body>
	<div class="bigheader">
		<div class="logoholder">
		<img class="logo" src="templates/DynaHotel/images/logo2.png">
		</div>
		<div class="headerbutton">
			<button type="button" class="btn btn-success"><a class="link"href="../client">GA NAAR DYNA »</a></button>
			<button type="button" class="btn btn-danger"><a class="link" href="../logout">LOG UIT »</a></button><br>
		</div>
	</div>
	<div class="menuwrap">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<li>
						<a class="nav-link" href="../me">Home</a>
					</li>
					<li>
						<a class="nav-link" href="../home/{username}" >Je account</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link " href="../community" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="../community">Community</a>
							<a class="dropdown-item" href="../staff">Staff</a>
							<a class="dropdown-item" href="../sollicitaties">Word staff</a>
						</div>
					</li>
					<li>
						<a class="nav-link" href="../buyvip">Koop VIP Poins</a>
					</li>
				</div>
				<div class="navbar-nav ml-auto">
					<span class="nav-item nav-link ">{online} online</span>
				</div>
			</div>
		</nav>
	</div>
	</div>
	<div class="container">
<?php include_once("include/header.php");

if (isset($_POST['go'])) {
	$name = $dbh->prepare("SELECT username FROM users WHERE id =" . $_SESSION['id']);
	$name->execute();
	$namerow = $name->fetch();
	
	
	$user = $dbh->prepare("SELECT userid FROM staffapplication WHERE userid =" . $_SESSION['id']);
	$user->execute();
	$userrow = $user->fetch();
	if ($userrow['userid'] == $_SESSION['id']) {
		?>
		<br>
		<div class="alert alert-danger fade show" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h5>Ohnee. </h5>
			Je hebt blijkbaar al een keer gesolliciteerd. Omdat we denken dat je spammed, 
			word je sollicitatie verwijderd en mag je niet meer solliciteren. Sorry. <br>Herhaling kan ervoor zorgen dat je gebanned word.
		</div>
<?php }
	else {
		$user = $dbh->prepare("INSERT INTO staffapplication (username, userid, function, online, whoyouknow, why, date) VALUES 
('" . $namerow['username'] . "', '" . $_SESSION['id'] . "', '" . $_POST['type'] . "', '" . $_POST['online'] . "', '" . $_POST['whoyouknow'] . "', '" . $_POST['why'] . "', '" . time() ."')");
		$user->execute();
		?>
		<br>
		<div class="alert alert-info fade show" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h5>Dank. </h5>
			Je sollie is binnen en we checken m in een week.
		</div>
		<?php
	}
}
?>
<br>
<div class="row">
	<div class="col-6">
		<div class="row">
			<div class="pil text-justify">
				<div class="pilhead" style="background-color: #F55D3E;">SOLLICITEER</div>
				<form class="form-horizontal" action="sollicitaties" method="POST">>
					<fieldset>
						<div class="form-group">
							<label class=" control-label"  for="name">IGN</label>  
							<div class="">
							<input required id="name" name="name" type="text" placeholder="" class="form-control input-md" disabled value="{username}" required="">
							</div>
						</div>
						<div class="form-group">
						  <label class=" control-label" for="type">Waarvoor solisiteer je?</label>
						  <div class="">
							<select id="type" name="type" class="form-control">
							  <option value="admin">Administrator</option>
							  <option value="mod">Moderator</option>
							  <option value="helper">Helper</option>
							</select>
						  </div>
						</div>
						<div class="form-group">
						  <label class=" control-label" for="whoyouknow">Wie ken je al van het team?</label>
						  <div class="">
							<select  id="whoyouknow" name="whoyouknow" class="form-control">
							  <option value="0">--kies--</option>
							  <option value="None">Niemand van deze lijst</option>
							  <option value="ItsMeRomian">ItsMeRomian</option>
							  <option value="NietMarvin">NietMarvin</option>
							  <option value="Lodde">Lodde</option>
							</select>
						  </div>
						</div>
						<div class="form-group">
							<label class=" control-label"  for="online">Hoeveel lessen kun je online zijn per dag?</label>  
							<div class="">
							<input required id="online" name="online" type="number" placeholder="4" class="form-control input-md"  >
							</div>
						</div>
						<div class="form-group">
						  <label class=" control-label" for="why">Waarom moeten we jou kiezen?</label>
						  <div class="">                     
							<textarea required class="form-control" id="text" name="why"></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <label class=" control-label" for="airpods">Heb je airpods?</label>
						  <div class="">                     
							<input type="radio" name="a" value="x"> Ja<br>
							<input type="radio" name="a" value="x"> Nee<br>
						  </div>
						</div>
						<button class="btn btn-large btn-success " type="submit" name="go">HUTS</button>					
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div class="col-6">
		<div class="pil text-justify">
			<div class="pilhead text-right text-uppercase" style="background-color: #F55D3E; padding-right: 12px;">Join ons team </div>
			We zoeken nog mensen die ons autistische team willen versterken. wat een kans om iets te berijken in je leven!<br><br>
			Wat we van je verwachten:<br>
			<ul>
				<li>Een beetje profesionaliteit</li>
				<li>Dat je een van onze teamleden al kent</li>
				<li>Dat je veel online kan zijn</li>
				<li>Dat je airpods hebt want we willen geen broke bobbas in ons team.</li>
			</ul>
			We beoordelen op chatlogs, onlinetijd, hoe je bent tegen spelers en of je n beetje cool bent.
		</div>
	</div>
</div>
<?php require_once('include/footer.php'); ?>
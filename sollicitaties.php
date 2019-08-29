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
			<h5>ohno. </h5>
			You've already applied for this job. Because we think you're spamming,
			your application will be deleted and further applications will be denied. Sorry. 
			<br>Repeating this can result in a ban.
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
			<h5>Thanks. </h5>
			We'll check your application in a week.
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
				<div class="pilhead" style="background-color: #F55D3E;">APPLY</div>
				<form class="form-horizontal" action="sollicitaties" method="POST">>
					<fieldset>
						<div class="form-group">
							<label class=" control-label"  for="name">IGN</label>  
							<div class="">
							<input required id="name" name="name" type="text" placeholder="" class="form-control input-md" disabled value="{username}" required="">
							</div>
						</div>
						<div class="form-group">
						  <label class=" control-label" for="type">What are you applying for?</label>
						  <div class="">
							<select id="type" name="type" class="form-control">
							  <option value="admin">Administrator</option>
							  <option value="mod">Moderator</option>
							  <option value="helper">Helper</option>
							</select>
						  </div>
						</div>
						<div class="form-group">
						  <label class=" control-label" for="whoyouknow">Who do you know?</label>
						  <div class="">
							<select  id="whoyouknow" name="whoyouknow" class="form-control">
							  <option value="0">--kies--</option>
							  <option value="None">No one</option>
							  <option value="ItsMeRomian">ItsMeRomian</option>
							  <option value="NietMarvin">NietMarvin</option>
							  <option value="Lodde">Lodde</option>
							</select>
						  </div>
						</div>
						<div class="form-group">
							<label class=" control-label"  for="online">How many lessons can you be online?</label>  
							<div class="">
							<input required id="online" name="online" type="number" placeholder="number" class="form-control input-md"  >
							</div>
						</div>
						<div class="form-group">
						  <label class=" control-label" for="why">Why should we choose you? +-5 sentences</label>
						  <div class="">                     
							<textarea required class="form-control" id="text" name="why"></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <label class=" control-label" for="airpods">Do you have airpods?</label>
						  <div class="">                     
							<input type="radio" name="a" value="x"> Yes<br>
							<input type="radio" name="a" value="x"> No<br>
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
			<div class="pilhead text-left text-uppercase" style="background-color: #56E39F; padding-right: 12px;">Join our team!</div>
			We're searching people to make our team better. Do you think you can help us?<br><br>
			What we expect from you:<br>
			<ul>
				<li>Professionality</li>
				<li>That you know someone from the team already</li>
				<li>That you can be online for more than 3 lessons a day</li>
				<li>That you have airpods</li>
			</ul>
			You wil be judged on chatlogs and your past onlinetime.
		</div>
	</div>
</div>
<?php require_once('include/footer.php'); ?>
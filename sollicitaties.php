<?php include_once("include/header.php")?>
<br>
<div class="row">
	<div class="col-6">
		<div class="row">
			<div class="pil text-justify">
				<div class="pilhead" style="background-color: #F55D3E;">SOLLICITEER</div>
				<form class="form-horizontal">
					<fieldset>
						<div class="form-group">
							<label class=" control-label"  for="name">IGN</label>  
							<div class="">
							<input id="name" name="name" type="text" placeholder="" class="form-control input-md" disabled value="{username}" required="">
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
							<select id="whoyouknow" name="whoyouknow" class="form-control">
							  <option value="ItsMeRomian">ItsMeRomian</option>
							  <option value="NietMarvin">NietMarvin</option>
							  <option value="Lodde">Lodde</option>
							</select>
						  </div>
						</div>
						<div class="form-group">
							<label class=" control-label"  for="online">Hoeveel lessen kun je online zijn per dag?</label>  
							<div class="">
							<input id="online" name="online" type="number" placeholder="4" class="form-control input-md"  >
							</div>
						</div>
						<div class="form-group">
						  <label class=" control-label" for="text">Waarom jou?</label>
						  <div class="">                     
							<textarea class="form-control" id="text" name="text"></textarea>
						  </div>
						</div>
						<button class="btn btn-large btn-success " type="submit" name="login">HUTS</button>					
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
			</ul>
			We beoordelen op chatlogs, onlinetijd, hoe je bent tegen spelers en of je n beetje cool bent. ohja en je moet natuurlijk airpods hebben want no broke bois allowed.
		</div>
	</div>
</div>
<?php require_once('include/footer.php'); ?>
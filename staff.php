<?php include_once("include/header.php")?>
<br>
<div class="row">
	<div class="col-8">
		<div class="row">
			<div class="pil text-justify">
				<div class="pilhead" style="background-color: #F55D3E;">OWNER</div>
				<div class="lastuser">
					<a href="/home/1"><h3>ITSMEROMIAN</h3></a>
					<?php
					$getlastusers = $dbh->prepare("SELECT username,look,id FROM users WHERE username = 'itsmeromian' LIMIT 1");
					$getlastusers->execute();
					$user = $getlastusers->fetch();?>
					<img style="width: 80px;"src="https://retroripper.com/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
				</div>
				<p style="margin-left: 40px; float: left;">supercoole boi</p>
				<img src="/swf/c_images/album1584/0wn.gif" style="float:right;">
			</div>
			
			<div class="pil text-justify">
				<div class="pilhead" style="background-color: #F55D3E;">MODERATORS</div>
				<div class="row">
					<div class="lastuser">
						<a href="/home/3"><h3>KAZOO</h3></a>
						<?php
						$getlastusers = $dbh->prepare("SELECT username,look,id FROM users WHERE username = 'kazoo' LIMIT 1");
						$getlastusers->execute();
						$user = $getlastusers->fetch();?>
						<img style="width: 80px;"src="https://retroripper.com/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
					</div>
					<p style="margin-left: 40px; float: left; width:74%;">nog een supercoole boi
					<img src="/swf/c_images/album1584/ADM.gif" style="float:right;"></p>
				</div>
				<hr>
				<div class="row">
					<div class="lastuser">
						<a href="/home/8"><h3>LODDE</h3></a>
						<?php
						$getlastusers = $dbh->prepare("SELECT username,look,id FROM users WHERE username = 'lodde' LIMIT 1");
						$getlastusers->execute();
						$user = $getlastusers->fetch();?>
						<img style="width: 80px;"src="https://retroripper.com/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
					</div>
					<p style="margin-left: 40px; float: left;width:74%;">nog een supercoole gurl
					<img src="/swf/c_images/album1584/ADM.gif" style="float:right;"></p>
				</div>
			</div>
			<div class="pil text-justify">
				<div class="pilhead" style="background-color: #F55D3E;">HELPERS</div>
				<div class="lastuser">
					<h3>:(</h3>
					<?php
					$getlastusers = $dbh->prepare("SELECT username,look,id FROM users WHERE username = '' LIMIT 1");
					$getlastusers->execute();
					$user = $getlastusers->fetch();?>
					<img style="width: 80px;"src="https://retroripper.com/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
				</div>
				<p style="margin-left: 40px; float: left;">Word jij onze nieuwe helper?</p>
				<img src="/swf/c_images/album1584/ADM.gif" style="float:right;">
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="row">
			<div class="pil text-justify">
				<div class="pilhead" style="background-color: #56E39F;">
					OOK STAFF WORDEN?
				</div>
				<img style="float: right;"src="templates/DynaHotel/images/nieuws.gif">
				<p>
				Solisiteer en misschien word jij ook lit van ons prachtige team!<br>
				Klik <a href="solicitaties">hier</a> om te soliciteren.
				</p>
			</div>
		</div>
	</div>
</div>
<?php require_once('include/footer.php'); ?>

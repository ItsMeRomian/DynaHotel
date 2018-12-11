<?php include_once("include/header.php")?>
<br>
<div class="row">
	<div class="col-8">
		<div class="row">
			<div class="pil text-justify">
				<div class="pilhead" style="background-color: #F55D3E;">OWNER</div>
				<div class="lastuser">
					<span><a href="/home/1">ITSMEROMIAN</a></span>
					<?php
					$getlastusers = $dbh->prepare("SELECT username,look,id FROM users WHERE username = 'itsmeromian' LIMIT 1");
					$getlastusers->execute();
					$user = $getlastusers->fetch();?>
					<img style="width: 80px;"src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
				</div>
				<p style="margin-left: 40px; float: left;">supercoole boi</p>
				<img src="/swf/c_images/album1584/0wn.gif" style="float:right;">
			</div>
			
			<div class="pil text-justify">
				<div class="pilhead" style="background-color: #F55D3E;">MODERATORS</div>
				<div class="row">
					<div class="lastuser">
					<span><a href="/home/3">KAZOO</a></span>
						<?php
						$getlastusers = $dbh->prepare("SELECT username,look,id FROM users WHERE username = 'kazoo' LIMIT 1");
						$getlastusers->execute();
						$user = $getlastusers->fetch();?>
						<img style="width: 80px;"src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
					</div>
					<p style="margin-left: 40px; float: left; width:74%;">nog een supercoole boi
					<img src="/swf/c_images/album1584/ADM.gif" style="float:right;"></p>
				</div>
				<hr>
				<div class="row">
					<div class="lastuser">
					<span><a href="/home/8">LODDE</a></span>
						<?php
						$getlastusers = $dbh->prepare("SELECT username,look,id FROM users WHERE username = 'lodde' LIMIT 1");
						$getlastusers->execute();
						$user = $getlastusers->fetch();?>
						<img style="width: 80px;"src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
					</div>
					<p style="margin-left: 40px; float: left;width:74%;">nog een supercoole gurl
					<img src="/swf/c_images/album1584/ADM.gif" style="float:right;"></p>
				</div>
			</div>
			<div class="pil text-justify">
				<div class="pilhead" style="background-color: #F55D3E;">HELPERS</div>
				<div class="lastuser">
					<span><a href="#">:(</a></span>
					<?php
					$getlastusers = $dbh->prepare("SELECT username,look,id FROM users WHERE username = '' LIMIT 1");
					$getlastusers->execute();
					$user = $getlastusers->fetch();?>
					<img style="width: 80px;"src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
				</div>
				<p style="margin-left: 40px; float: left;">Word jij onze nieuwe helper?</p>
				<img src="/swf/c_images/album1584/ADM.gif" style="float:right;">
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="row">
			<div class="pil text-justify">
				<div class="pilhead" style="background-color: #56E39F;">BECOME STAFF?</div>
				<img style="float: right;"src="templates/DynaHotel/images/nieuws.gif">
				<p>
				Sollie now and maybe we'll recruit you! we're currently searching for a <b>Moderator</b>, <b>helper</b> and a <b>admin</b>.<br>
				click <a href="sollicitaties">here</a> to sollie.
				</p>
			</div>
		</div>
	</div>
</div>
<?php require_once('include/footer.php'); ?>
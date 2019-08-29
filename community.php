<?php include_once('include/header.php'); ?>
<br>

<div class="row">
	<div class="col-8">
		<div class="row">
			<div class="pil text-justify" style="height: 250px;">
				<div class="pilhead" style="background-color: #F55D3E;">
					RICHEST DYNA'S
				</div>
				<?php
				$getlastusers = $dbh->prepare("SELECT username,look,id,credits FROM users ORDER BY credits DESC LIMIT 5");
				$getlastusers->execute();
				while ($user = $getlastusers->fetch()) { ?>
					<div class="lastuser">
						<span><a href="/home/<?=$user['id']?>"><?=$user['username']?></a></span><br>
						<img style="width: 80px;"src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
						<br><span><span><img src="https://hotel.dyna.host/templates/DynaHotel/images/icons/creditos.png"> <?=$user['credits']?></span>
					</div>
				
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="pil text-justify" style="height: 250px;">
				<div class="pilhead" style="background-color: #FFA630;">
					NEWEST ACCOUNTS
				</div>
				<?php
				$getlastusers = $dbh->prepare("SELECT username,look,id FROM users ORDER BY ID DESC LIMIT 5");
				$getlastusers->execute();
				while ($user = $getlastusers->fetch()) { ?>
					<div class="lastuser">
						<span><a href="/home/<?=$user['id']?>"><?=$user['username']?></a></span><br>
						<img style="width: 80px;"src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
					</div>
				
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="row">
			<div class=" pil text-justify">
				<div class="pilhead">
					DYNA OF THE WEEK
				</div>
				<?=userOfTheWeek()?>
			</div>
		</div>
	</div>
</div>
<?php include_once('include/footer.php'); ?>
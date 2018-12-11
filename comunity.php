<div class="row">
	<div class="pil text-justify">
		<div class="pilhead" style="background-color: #F55D3E;">
			NIEUWSTE ACCOUNTS
		</div>
		<?php
		$getlastusers = $dbh->prepare("SELECT username,look,id FROM users ORDER BY ID DESC LIMIT 5");
		$getlastusers->execute();
		while ($user = $getlastusers->fetch()) { ?>
			<div class="lastuser">
				<span><?=$user['username']?></span><br>
				<img style="width: 80px;"src="https://retroripper.com/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
			</div>
		
		<?php } ?>
	</div>
</div>
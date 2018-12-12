<?php include_once('include/header.php'); 

//Als je linkt met een userid kom je toch op bv /home/ItsMeRomian ipv /home/1
if (is_numeric(str_replace("/home/", "", parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)))) {
	header("Location: https://hotel.dyna.host/home/". userHome('username'));
}
?>
<div class="row">
	<div class="col">
		<div class="userview">
			<div class="user">
				<img src="https://retroripper.com/habbo-imaging/avatarimage?figure=<?=userHome('look')?>&direction=2&head_direction=3&action=std,wav&gesture=std">
			</div>
			<div class="usertext">
				<span class="title text-capitalize">Hi! Ik ben <?=userHome('username')?></span>
				<?php 
				if (userHome('rank') > 3) { ?>
					<img src='/swf/c_images/album1584/ADM.gif' style="margin-top: -11px;"> 
				<?php } ?>
				<br>
				<span class="font-italic">"<?=userHome('motto')?>"</span><br>
				<span>Account sinds: <?=date("d-m-Y", userHome('account_created'))?>
			</div>
			<div class="userinfo text-right">
				<span class="text-capitalize"><?=userHome('credits')?> Credits</span> <img src="/templates/brain/style/images/icons/6.png"><br>
				<span class="motto font-italic"><?=userHome('activity_points')?> Duckets</span> <img src="/templates/brain/style/images/icons/duckicon.png"><br>
				<span class="motto font-italic"><?=userHome('vip_points')?> VIP Points</span> <img src="/templates/brain/style/images/icons/8.png">
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-8">
		<div class="row">
			<div class="pil text-justify" style="height: 200px;">
				<div class="pilhead" style="background-color: #FFA630;">
					<h3>Kamers gemaakt door <?=userHome('username')?></h3>
				</div>
				<?php
				$getlastrooms = $dbh->prepare("SELECT caption, model_name,owner, users_now FROM rooms WHERE owner = " . userHome('id') . " ORDER BY ID DESC LIMIT 5");
				$getlastrooms->execute();
				while ($room = $getlastrooms->fetch()) { 
					$madeby = $dbh->prepare("SELECT username FROM users WHERE id=" . $room['owner']);
					$madeby->execute();
					$owner = $madeby->fetch();
					?>
					<div class="lastuser">
						<span><?=$room['caption']?></span><br>
						<span style="font-size: 13px;">Gemaakt door <?=$owner['username']?><br></span>
						<img style="width: 80px;"src="/swf/c_images/newroom/<?=$room['model_name']?>.png">
						<br><span style="font-size: 13px;"><?=$room['users_now']?> online now</span>
					</div>
				
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="pil text-justify" style="height: 200px;">
				<div class="pilhead" style="background-color: #FFA630;">
					<h3>VRIENDEN VAN <?=userHome('username')?></h3>
				</div>
				<?php
				$getfriends = $dbh->prepare("SELECT user_two_id FROM messenger_friendships WHERE user_one_id = " . userHome('id') . " ORDER BY ID DESC LIMIT 5");
				$getfriends->execute();
				while ($friend = $getfriends->fetch()) { 
					$friendinfo = $dbh->prepare("SELECT id, username, look, online FROM users WHERE id=" . $friend['user_two_id']);
					$friendinfo->execute();
					$friendinforow = $friendinfo->fetch();
					?>
					<div class="lastuser">
							<span>
								<a href="/home/<?=$friendinforow['id']?>"><?=$friendinforow['username']?></a><br>
								<?php if ($friendinforow['online']) { ?>
									<span style="color: green;">online</span>
									<?php } else { ?><span style="color: red;">offline</span><?php } ?></span><br>
									<img style="width: 80px;margin-top: -10px;" src="https://retroripper.com/habbo-imaging/avatarimage?figure=<?=$friendinforow['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
					</div>
				
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="row">
			<div class="pil text-justify" style="height: 135px;">
				<div class="pilhead" style="background-color: #F55D3E;">
					<h3>Relaties van <?=userHome('username')?></h3>
				</div>
				<?php
				$getlove = $dbh->prepare("SELECT user_id, target, type FROM user_relationships WHERE type = '1' AND user_id = " . userHome('id') . " ORDER BY ID DESC LIMIT 1");
				$getlove->execute();
				$name = $getlove->fetch();
				
				$getname = $dbh->prepare("SELECT username FROM users WHERE id =" . $name['target']);
				$getname->execute();
				$namelove = $getname->fetch();
				
				$getbest = $dbh->prepare("SELECT user_id, target, type FROM user_relationships WHERE type = '2' AND user_id = " . userHome('id') . " ORDER BY ID DESC LIMIT 1");
				$getbest->execute();
				$name = $getbest->fetch();
				
				$getname = $dbh->prepare("SELECT username FROM users WHERE id =" . $name['target']);
				$getname->execute();
				$namebest = $getname->fetch();
				
				
				$getenemy = $dbh->prepare("SELECT user_id, target, type FROM user_relationships WHERE type = '3' AND user_id = " . userHome('id') . " ORDER BY ID DESC LIMIT 1");
				$getenemy->execute();
				$name = $getenemy->fetch();
			
				$getname = $dbh->prepare("SELECT username FROM users WHERE id =" . $name['target']);
				$getname->execute();
				$nameenemy = $getname->fetch();
			
				?>
				<img src="/templates/brain/style/images/icons/iconlove.png"><a href="/home/<?=$namelove["username"]?>"> <?=$namelove["username"]?></a><br>
				<img src="/templates/brain/style/images/icons/iconbest.png"><a href="/home/<?=$namebest["username"]?>"> <?=$namebest["username"]?></a><br>
				<img src="/templates/brain/style/images/icons/iconheat.png"><a href="/home/<?=$nameenemy["username"]?>"> <?=$nameenemy["username"]?></a><br>
			</div>
		</div>
	</div>
</div>

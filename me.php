<?php include_once('include/header.php'); 
$rand = rand(0,3);
switch($rand) {
	case 0:
		$welcome = "Nice to see you again, {username}!";
		break;
	case 1:
		$welcome = "Welcome back, {username}!";
		break;
	case 2:
		$welcome = "Welcome, {username}!";
		break;
	case 3:
		$welcome = "Good to see you, {username}!";
		break;
}
?>
	<div class="row">
		<div class="col">
			<div class="userview">
				<div class="user">
					<img src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure={look}&direction=2&head_direction=3&action=std,wav&gesture=std">
				</div>
				<div class="usertext">
					<span class="title text-capitalize"><?=$welcome?></span><br>
					<span class="font-italic">"{motto}"</span>
					<br><br>
					<button type="button" class="btn btn-success"><a class="link"href="client" target="_BLANK">GO TO DYNA »</a></button>
				</div>
				<div class="userinfo text-right">
					<span class="text-capitalize">{credits} Credits</span> <img src="/templates/brain/style/images/icons/6.png"><br>
					<span class="motto font-italic">{activity_points} Duckets</span> <img src="/templates/brain/style/images/icons/duckicon.png"><br>
					<span class="motto font-italic">{vip_points} VIP Points</span> <img src="/templates/brain/style/images/icons/8.png">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-8">
			<div class="row">
				<div class="pil text-justify">
					<div class="pilhead" style="background-color: #56E39F;">
						WELCOME TO DYNA
					</div>
					Here at {hotelname} Hotel, we are a small community hotel, just like Habbo but our coin currency is free! 
					Along with friendly management that keep the hotel running smooth.
					Our bullying and advertising policy is kept at a strict level to prevent such occuring on the hotel. 
					For more information on the rules, Click Here. 
					We are here to give you the best ultimate experience for you and your friends. 
					The community holds events and competitions to make it more of a fun place to hang out.
					<br> 
					<br>
					<h5>COINS IN DYNA</h5>
					<img style="float: right; margin-left: 5px; margin-right: -5px;"src="/templates/DynaHotel/images/richcoins.png">
					Je hebt 3 verschillende soorten munten op Dyna. <b><span style="color: gold;">CREDITS</span></b>,<b>  <span style="color: pink;">DUCKETS</span></b> en <b><span style="color: blue;">VIP POINTS</span></b>. Credits en Duckets verdien je door 
					elke dag te spelen. Je krijgt ze door mee te doen aan games en ieder half uur krijg je een bepaalde hoeveelheid. <br>
					VIP Points krijg je door games te winnen. Je kunt ze ook <a href="buyvip">kopen</a>. Met VIP Points kun je superrares halen
					in het hotel. Je kunt outfits halen die je niet kunt kopen met credits. Bij het halen van VIP Points krijg je ook de <b>VIP RANK</b>.
					
				</div>
			</div>
			<div class="row">
				<div class="pil text-justify">
					<div class="pilhead" style="background-color: #56E39F;">
						NEWEST ACCOUNTS
					</div>
					<?php
					$getlastusers = $dbh->prepare("SELECT username,look,id FROM users ORDER BY ID DESC LIMIT 5");
					$getlastusers->execute();
					while ($user = $getlastusers->fetch()) { ?>
						<div class="lastuser">
							<span><a href="/home/<?=$user['id']?>"><?=$user['username']?></a><br>
							<?php if ($friendinforow['online']) { ?>
									<span style="color: green;">online</span>
									<?php } else { ?><span style="color: red;">offline</span><?php } ?></span>
							<img style="width: 80px;margin-top: -10px;" src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?=$user['look']?>&direction=2&head_direction=3&action=std,wav&gesture=std">
						</div>
					
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="pil text-justify">
					<div class="pilhead" style="background-color: #56E39F;">
						LAST ROOMS MADE
					</div>
					<?php
					$getlastrooms = $dbh->prepare("SELECT caption, model_name,owner, users_now FROM rooms ORDER BY ID DESC LIMIT 5");
					$getlastrooms->execute();
					while ($room = $getlastrooms->fetch()) { 
						$madeby = $dbh->prepare("SELECT username FROM users WHERE id=" . $room['owner']);
						$madeby->execute();
						$owner = $madeby->fetch();
						?>
						<div class="lastuser">
							<span><?=$room['caption']?></span><br>
							<span style="font-size: 13px;">Made by <br><a href="/home/<?=$room['owner']?>"><?=$owner['username']?></a><br></span>
							<img style="width: 80px;"src="/swf/c_images/newroom/<?=$room['model_name']?>.png">
							<br><span style="font-size: 13px;"><?=$room['users_now']?> online now</span>
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
			<div class="row">
				<div class=" pil text-justify">
					<div class="pilhead"> AD </div>
					<img src="https://via.placeholder.com/360x600?text=360x600">
				</div>
			</div>
		</div>
	</div>
	<?php include_once('include/footer.php'); ?>
</div>
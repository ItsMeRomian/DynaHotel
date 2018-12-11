<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	function userOfTheWeek()
	{
		global $config, $lang, $dbh;
		$getUOTW = $dbh->prepare("SELECT userid,text FROM uotw");
		$getUOTW->execute();
		$getUOTWData = $getUOTW->fetch();
		$getUser = $dbh->prepare("SELECT id,look,username,motto,online FROM users WHERE id = :id");
		$getUser->bindParam(':id', $getUOTWData['userid']);
		$getUser->execute();
		$getUserData = $getUser->fetch();
		$getUserBadge = $dbh->prepare("SELECT badge_id,user_id,badge_slot FROM user_badges WHERE user_id = :id AND badge_slot = 1 LIMIT 1");
		$getUserBadge->bindParam(':id', $getUOTWData['userid']);
		$getUserBadge->execute();
		$getUserDataBadge = $getUserBadge->fetch();
		If($getUser->RowCount() == 1) { ?>
		<div class="uotw" style="height: 103px;">
			<img style="float:left; margin-top: -12px;" src="https://retroripper.com/habbo-imaging/avatarimage?figure=<?=$getUserData['look']?>&direction=2&head_direction=3&action=crr=667&gesture=sml">
			<span class="title"><?=$getUserData['username']?><br></span>
			<span class="motto">"<?=$getUserData['motto']?>"<br></span>
			<hr style="margin: 2px;">
			<span class="text"><b>MODS</b>: <?=$getUOTWData['text']?><br></span>
		</div>
        <?php } else {?> 
        <div>
            Niemand is Dyna van de week :(
        </div>
        <?php }} ?>
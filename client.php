<?php Game::sso('client'); ?>
<html>
</body>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?= $config['hotelName'] ?> - Hotel</title>
    <script src="/templates/brain/client/js/jquery-latest.js" type="text/javascript"></script>
    <script src="/templates/brain/client/js/jquery-ui.js" type="text/javascript"></script>
    <script src="/templates/brain/client/js/flashclient.js"></script>
    <script src="/templates/brain/client/js/flash_detect_min.js"></script>
    <script src="/templates/brain/client/js/client.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/templates/brain/client/css/client.css?v=5" type="text/css">
</head>
<body>
<center>
    <div id="client-ui">
        <div style="z-index: -1;" class="client" id="client"></div>
    </div>
    <script>
        var Client = new SWFObject("<?= $hotel['swfFolderSwf'] ?>", "client", "100%", "100%", "10.0.0");
        Client.addVariable("client.allow.cross.domain", "0");
        Client.addVariable("client.notify.cross.domain", "1");
        Client.addVariable("connection.info.host", "<?= $hotel['emuHost'] ?>");
        Client.addVariable("connection.info.port", "<?= $hotel['emuPort'] ?>");
        Client.addVariable("site.url", "<?= $config['hotelUrl'] ?>");
        Client.addVariable("url.prefix", "<?= $config['hotelUrl'] ?>");
        Client.addVariable("client.reload.url", "<?= $config['hotelUrl'] ?>/me");
        Client.addVariable("client.fatal.error.url", "<?= $config['hotelUrl'] ?>/fatal");
        Client.addVariable("client.connection.failed.url", "<?= $config['hotelUrl'] ?>/disconnected");
        Client.addVariable("external.override.texts.txt", "<?= $hotel['external_Texts_Override'] ?>");
        Client.addVariable("external.override.variables.txt", "<?= $hotel['external_Variables_Override'] ?>");
        Client.addVariable("external.variables.txt", "<?= $hotel['external_Variables'] ?>");
        Client.addVariable("external.texts.txt", "<?= $hotel['external_Texts'] ?>");
        Client.addVariable("external.figurepartlist.txt", "<?= $hotel['figuredata'] ?>");
        Client.addVariable("flash.dynamic.avatar.download.configuration", "<?= $hotel['figuremap'] ?>");
        Client.addVariable("productdata.load.url", "<?= $hotel['productdata'] ?>");
        Client.addVariable("furnidata.load.url", "<?= $hotel['furnidata'] ?>");
        Client.addVariable("use.sso.ticket", "1");
        Client.addVariable("sso.ticket", "<?= User::userData('auth_ticket') ?>");
        Client.addVariable("processlog.enabled", "1");
        Client.addVariable("client.starting", "pak mij vahaaassttttt ");
        Client.addVariable("flash.client.url", "<?= $hotel['swfFolder'] ?>/");
        Client.addVariable("flash.client.origin", "popup");
        Client.addVariable("ads.domain", "");
        Client.addVariable("diamonds.enabled", '<?= $hotel['diamonds.enabled'] ?>');
        Client.addParam('base', '<?= $hotel['swfFolder'] ?>/');
        Client.addParam('allowScriptAccess', 'always');
        Client.addParam('wmode', "opaque");
        Client.write('client');
        FlashExternalInterface.signoutUrl = "<?= $config['hotelUrl'] ?>/logout";
    </script>
	<div id="hidepls">
		<a style="z-index: 9999; color: #0e151c;"href="https://adobe.com/go/getflashplayer">CLICK HIER OM FLASH AAN TE ZETTEN</a>
	</div>
</center>
</body>
<script>setTimeout(function() { document.getElementById("hidepls").style.display = "none"; }, 10000);</script>
</html>
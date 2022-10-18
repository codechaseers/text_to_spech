<div id="player"></div>
<form method="post">
	 <TExtarea id="txt" name="txt"></TExtarea>
	<input type="SUBMIT" name="submit" value="Convert to speach" />
</form>
<?php
if(isset($_POST['txt'])){
	$txt=$_POST['txt'];
	$txt=htmlspecialchars($txt);
	$txt=rawurlencode($txt);
	$html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en');
	$player="<audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
	echo $player;
}
?>
<!-- https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='ok'&tl=en
https://translate.google.co.in/?sl=hi&tl=en&text=%E0%A4%B9%E0%A4%B2%E0%A5%8B%20&op=translate -->
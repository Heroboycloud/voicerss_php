<?php
require_once('voicerss_tts.php');
$text= "This is an example of voice rss api in php";
$api_key= "0c9a2dc3e64b4b258d1028b624e73953";
$tts = new VoiceRSS;
$voice = $tts->speech([
    'key' => $api_key,
    'hl' => 'en-us',
    'v' => 'Linda',
    'src' => $text,
    'r' => '0',
    'c' => 'mp3',
    'f' => '44khz_16bit_stereo',
    'ssml' => 'false',
    'b64' => 'true'
]);

echo '<audio src="' . $voice['response'] . '" autoplay="autoplay"></audio>';
?>

<?php
$access_token = '1n4HF8OIC9v65ocWyJAtnzMOUSyiZf6rrP1/xLKQDtFK+nKupweT4dVMBFP79mgVgC35CsJzx3pYOgRFBp7kodhi2d8/tXR1Ked59ISLLlz4yLxNohKdBMuHKnN0odSaT0iZ0ie7ObmpjYh8+jjHUwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
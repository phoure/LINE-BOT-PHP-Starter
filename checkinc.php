<?php
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
$textIn = $arrJson['events'][0]['message']['text'];
$replayId = $arrJson['events'][0]['replyToken'];
$lineId = $arrJson['events'][0]['source']['userId'];
$group = 'C859470138e3df8760ec70fbff232a954'; //C08d2200d80b642b08cdde3ef2685b614

$groupId = $arrJson['events'][0]['source']['groupId'];

function curl($url){
		  $ch = curl_init($url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		  $data = curl_exec($ch);
		  curl_close($ch);
		  return $data;
}
				
			$card = array([
			'type' => 'text',
			'text' => $groupId
			]);


	send($card, 'push', $groupId);



function emoji($code){
$bin = hex2bin(str_repeat('0', 8 - strlen($code)) . $code);
$emoticon =  mb_convert_encoding($bin, 'UTF-8', 'UTF-32BE');
return $emoticon;
}


function send($card,$target ,$to){
	
	$access_token = 'eoO1ij5VV9GXkhNaFrUmMLQOeYmRYyUbSVPkxp0OTtth5xB9WdSMeEuJno2PVD6SMxbCGixzweXT63ayRxNTWcEHeTVN4oetMOcUOl2cWVKh+ZcgH9bX7ZwMgAozs3Q8CUMUTegFoOC8Xc+sKHn1jgdB04t89/1O/w1cDnyilFU=';
	$arrHeader = array();
	$arrHeader[] = "Content-Type: application/json";
	$arrHeader[] = "Authorization: Bearer {$access_token}";
	
	
	if($target == 'reply'){
		$strUrl = 'https://api.line.me/v2/bot/message/reply';
		$data = array('replyToken' => $to, 'messages' => $card);
	}
	else if($target == 'push'){
		$strUrl = 'https://api.line.me/v2/bot/message/push';
		$data = array('to' => $to, 'messages' => $card);
	}
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$strUrl);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	echo $result ;
	curl_close ($ch);
}

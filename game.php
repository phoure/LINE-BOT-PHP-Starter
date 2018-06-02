<?php

function curl_get_contents($url)
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}


$access_token = 'hfdfyAmqI79pFXL+upQ6LobXR6TRwi9ydmcwYuhgLgyg/1Vx8EckOUbGxo41Bt4oN38CW4hgI82pB2VX3Psttb6X3Kz50/Kq4TPjpJNzfhPMSUrhhr5xRMyhapAbU00orb6TFddfVy2VvbrnBJqEgAdB04t89/1O/w1cDnyilFU=';
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
$textIn = $arrJson['events'][0]['message']['text'];
$replayId = $arrJson['events'][0]['replyToken'];
$userId = $arrJson['events'][0]['source']['userId'];
$group = 'Cd3f6dbdec8b434e7a2c6db4997b5769d';


$ans_calc = curl_get_contents('http://make.in.th/game/calc.txt');



if ($textIn == '.') {
	$card = array([
			'type' => 'text',
			'text' => 'User Id '.$userName.' คือ '.$userId
		    ]);
	 send($card, 'reply', $replayId);
}


else if ($textIn == 'ดู') {
	curl_get_contents('http://make.in.th/game/calc.php?action=checkscore&token='.$replayId.'&id='.$userId);
}

else if ($textIn == 'เปิดกล่อง') {
	curl_get_contents('http://make.in.th/game/calc.php?action=openbox&token='.$replayId.'&id='.$userId);
}

else if ($textIn == $ans_calc) {
	curl_get_contents('http://make.in.th/game/calc.php?action=ans&id='.$userId.'&token='.$replayId.'&ans='.$textIn);
}


function emoji($code){
$bin = hex2bin(str_repeat('0', 8 - strlen($code)) . $code);
$emoticon =  mb_convert_encoding($bin, 'UTF-8', 'UTF-32BE');
return $emoticon;
}


function send($card,$target ,$to){
	
	$access_token = 'hfdfyAmqI79pFXL+upQ6LobXR6TRwi9ydmcwYuhgLgyg/1Vx8EckOUbGxo41Bt4oN38CW4hgI82pB2VX3Psttb6X3Kz50/Kq4TPjpJNzfhPMSUrhhr5xRMyhapAbU00orb6TFddfVy2VvbrnBJqEgAdB04t89/1O/w1cDnyilFU=';
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
	curl_close ($ch);
}

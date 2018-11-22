<?php

$access_token = 'oeiJGSBWoFxJapOkOH/S9lr+seNwHthJ80HOx6RKPICosBtCsnokTiUPwGVE6JGPQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aI+AximvWt+twJPNhjclozOc0HIRIbh2g0MqTV13iY74AdB04t89/1O/w1cDnyilFU=';
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
$textIn = $arrJson['events'][0]['message']['text'];
$replayId = $arrJson['events'][0]['replyToken'];
$lineId = $arrJson['events'][0]['source']['userId'];

////////////////////////////////////////// get name //////////////////////////////////////////
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.line.me/v2/bot/group/'.$arrJson['events'][0]['source']['groupId'].'/member/'.$lineId,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer ".$access_token,
    "cache-control: no-cache"
  ),
));

$response_user = curl_exec($curl);
$response_user = json_decode($response_user, true);
$userName = $response_user['displayName'];
$userPicture = $response_user['pictureUrl'];
$groupId = $arrJson['events'][0]['source']['groupId'];



if($userName == 'Methasit'){
			$card = array([
			'type' => 'text',
			'text' => '$groupid[] = array(\''.$groupId.'\',\''.$textIn.'\');'
		      ]);
	send($card, 'reply', $replayId);
}

echo 'd';

function emoji($code){
$bin = hex2bin(str_repeat('0', 8 - strlen($code)) . $code);
$emoticon =  mb_convert_encoding($bin, 'UTF-8', 'UTF-32BE');
return $emoticon;
}


function send($card,$target ,$to){
	
	$access_token = 'oeiJGSBWoFxJapOkOH/S9lr+seNwHthJ80HOx6RKPICosBtCsnokTiUPwGVE6JGPQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aI+AximvWt+twJPNhjclozOc0HIRIbh2g0MqTV13iY74AdB04t89/1O/w1cDnyilFU=';
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

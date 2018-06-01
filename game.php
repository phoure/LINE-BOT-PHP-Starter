<?php
$access_token = 'hfdfyAmqI79pFXL+upQ6LobXR6TRwi9ydmcwYuhgLgyg/1Vx8EckOUbGxo41Bt4oN38CW4hgI82pB2VX3Psttb6X3Kz50/Kq4TPjpJNzfhPMSUrhhr5xRMyhapAbU00orb6TFddfVy2VvbrnBJqEgAdB04t89/1O/w1cDnyilFU=';
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
$textIn = $arrJson['events'][0]['message']['text'];
$idIn = $arrJson['events'][0]['source']['userId'];
$group = 'Cd3f6dbdec8b434e7a2c6db4997b5769d';
/*
	 $strUrl = 'https://api.line.me/v2/bot/message/reply';
 	 $data = array( 'replyToken' => $arrJson['events'][0]['replyToken'], 'type' => 'join');
	 send($data, $strUrl, $arrHeader);
*/
if ($textIn == '.') {
	
	$card = array([
			'type' => 'text',
			'text' => 'กลุ่ม ID '.$arrJson['events'][0]['source']['groupId']
		      ]);
	
	 send($card,  $arrJson['events'][0]['replyToken']);

	
}
/*

else if ($_GET['action' == 'calc') {
	
	$strUrl = 'https://api.line.me/v2/bot/message/reply';
	$card = array([
			'type' => 'text',
			'text' => 'กลุ่ม ID '.$arrJson['events'][0]['source']['groupId']
		      ]);
	
	 send($card, $strUrl, $arrHeader);

	
}
*/
		
function send($card,$to){
	
	$access_token = 'hfdfyAmqI79pFXL+upQ6LobXR6TRwi9ydmcwYuhgLgyg/1Vx8EckOUbGxo41Bt4oN38CW4hgI82pB2VX3Psttb6X3Kz50/Kq4TPjpJNzfhPMSUrhhr5xRMyhapAbU00orb6TFddfVy2VvbrnBJqEgAdB04t89/1O/w1cDnyilFU=';

	$arrHeader = array();
	$arrHeader[] = "Content-Type: application/json";
	$arrHeader[] = "Authorization: Bearer {$access_token}";
	
	$strUrl = 'https://api.line.me/v2/bot/message/reply';

	
	$data = array('replyToken' => $to, 'messages' => $card);
	
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

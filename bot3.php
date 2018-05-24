<?php
$access_token = 'fgFWEdG3kij2u4EyyvvzhSPWLCfK8Z2duZ40kmpKgbiIn/HpV6bQe5UgHesnjOa07GizYWFnE0AoDjUnMLj4iEi/PufqScjhbj5QBxDDgeiHm82i9h5zLJ2y9kc0y7+1NlW9CUSbKsUU6X8KUQC26wdB04t89/1O/w1cDnyilFU=';

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);


$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$access_token}";


	$groupid[] = array('C5ca58854e5e7ae33964770acadc0211d','test');

	//$groupid[] = array('C214e858f2c0e42285b5d56a12f0cfced','drivegay');
	for ($x = 0; $x <= count($groupid)-1; $x++) {
	
		$card = array(
			     [
			     'type' => 'template',
				"altText" => '🎬 แชร์วีดีโอ',
				"template" => array(
				    'type' => 'buttons',
				    'thumbnailImageUrl' => 'https://pbs.twimg.com/profile_banners/970238984822534144/1526954831/1500x500',
				    'imageAspectRatio' => 'rectangle',
				    'imageSize' => 'cover',
				    'imageBackgroundColor' => '#000000',
				    'text' => 'dsdfsdaf',
				    'defaultAction' =>  array(
					 'type' => 'uri',
					 'label' => 'ดูคลิปนี้',
					 'uri' => 'http://drivegay.com/video/'.$_GET['id'].'&ref='.$groupid[$x][1]
				    ),
				    'actions' =>  array(['type' => 'uri',
					 'label' => '🎬 ดูคลิปนี้',
					 'uri' => 'http://drivegay.com/video/'.$_GET['id'].'&ref='.$groupid[$x][1]
					])
				    )
				]
				);
			      

				$strUrl = "https://api.line.me/v2/bot/message/push";
		
				$data = array('to' => $groupid[$x][0], 'messages' => $card);
				send($data, $strUrl, $arrHeader);
	}

function send($data, $strUrl, $arrHeader){
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
 



 ?>

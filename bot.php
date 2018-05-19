<?php
$access_token = 'qNTXzzZpk6jEk57U46RK5iuyMyCjQRgF3GYrEyFOxBasHkdwuGeMMPdViCDbhvFnxB9nEFqGV7B3rrNr14cQjMh1LzeKooYfaxqwmwsCJQGR6x5keAIp7+It88/ShT0XWC+QuAvBtzZpRlCWBvdcaAdB04t89/1O/w1cDnyilFU=';


$groupid[] = array('C214e858f2c0e42285b5d56a12f0cfced','test');
$groupid[] = array('Cdcbc1ac3c747ec546fdd194c0fbf7b1f','clipgayzab');

for ($x = 0; $x <= count($groupid)-1; $x++) {
	
$card = array(
	[
	'type' => 'template',
    "altText" => "this is a confirm template",
	"template" => array(
					'type' => 'buttons',
					'thumbnailImageUrl' => $_GET['thumb'],
					'imageAspectRatio' => 'rectangle',
					'imageSize' => 'cover',
					'imageBackgroundColor' => '#000000',
					'text' => $_GET['title'],
					'defaultAction' =>  array(
										'type' => 'uri',
										'label' => 'ดูคลิปนี้',
										'uri' => 'http://drivegay.com/video/'.$_GET['id'].'&ref='.$groupid[$x][1]

					),
					'actions' =>  array(['type' => 'uri',
										'label' => 'ดูคลิปนี้',
										'uri' => 'http://drivegay.com/video/'.$_GET['id'].'&ref='.$groupid[$x][1]
									])

					)
	]
	);

	$data = array('to' => $groupid[$x][0], 'messages' => $card
);




					
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";


} 

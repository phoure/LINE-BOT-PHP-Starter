<?php
$access_token = 'qNTXzzZpk6jEk57U46RK5iuyMyCjQRgF3GYrEyFOxBasHkdwuGeMMPdViCDbhvFnxB9nEFqGV7B3rrNr14cQjMh1LzeKooYfaxqwmwsCJQGR6x5keAIp7+It88/ShT0XWC+QuAvBtzZpRlCWBvdcaAdB04t89/1O/w1cDnyilFU=';


echo '555asdfsadf555555';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);

$ee = array(
				[
					'type' => 'message',
					'label' => 'Yes',
					'text' => 'ยืนยันเลข'
				],
				[
					'type' => 'message',
					'label' => 'No',
					'text' => 'โปรดกรอกเลขใหม่'
				]
			);




$oo =  array(
			'type' => 'confirm',
		'text' => 'คุณแน่ใจว่าเลขติดตามคือ ss',
			'actions' => $ee
		);
		
		
$aa = array([
		'type' => 'text',
		'text' => 'คุณแน่ใจว่าเลขติดตามคือ ss',
	],
	[
		'type' => 'text',
		'text' => 'sdfsfasdf',
	],
	[
		'type' => 'image',
		'originalContentUrl' => 'https://image.ibb.co/dGC4Sa/booking_icon.jpg',
		'previewImageUrl' => 'https://image.ibb.co/dGC4Sa/booking_icon.jpg',
	],
	[
		'type' => 'sticker',
		'packageId' => '1',
		'stickerId' => '1',
	],
	[
		'type' => 'template',
	    "altText" => "this is a confirm template",
 		"template" => $oo
	]
	);

		$sss = array(
	'to' => 'C214e858f2c0e42285b5d56a12f0cfced',
	'messages' => $aa
);

					
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = $sss;
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
echo "OK";

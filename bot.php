<?php
$access_token = '1n4HF8OIC9v65ocWyJAtnzMOUSyiZf6rrP1/xLKQDtFK+nKupweT4dVMBFP79mgVgC35CsJzx3pYOgRFBp7kodhi2d8/tXR1Ked59ISLLlz4yLxNohKdBMuHKnN0odSaT0iZ0ie7ObmpjYh8+jjHUwdB04t89/1O/w1cDnyilFU=';


echo '555asdfsadกกกกกกกกf555กดฟหกด555';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text_in = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			$id = $event['source']['userId'];


$ee = array(
				[
					'type' => 'message',
					'label' => 'Yes',
					'text' => 'yes'
				]
			);




$oo =  array(
			'type' => 'confirm',
			'text' => 'Are you sure?',
			'actions' => $ee
		);
		
		
$aa = array([
		'type' => 'text',
		'text' => 'Are you sure?',
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
	'replyToken' => $replyToken,
	'messages' => $aa
);

					
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
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
		}
	}
}
echo "OK";
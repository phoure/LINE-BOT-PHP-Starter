<?php
$access_token = '1n4HF8OIC9v65ocWyJAtnzMOUSyiZf6rrP1/xLKQDtFK+nKupweT4dVMBFP79mgVgC35CsJzx3pYOgRFBp7kodhi2d8/tXR1Ked59ISLLlz4yLxNohKdBMuHKnN0odSaT0iZ0ie7ObmpjYh8+jjHUwdB04t89/1O/w1cDnyilFU=';


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



$aa = file_get_contents('http://prosabuy.com/bot/call_data.php?id='.$text_in);

$aa = str_replace("(","",$aa);
$aa = str_replace(")","",$aa);
$aa = str_replace('"',"",$aa);
$aa = str_replace('{originCountryData:{trackinfo:[{',"",$aa);

$aa = explode('],',$aa);
$ss = explode('},{',$aa[0]);

$ss = str_replace(',,',",",$ss);
$ss = str_replace('Date:','',$ss);
$ss = str_replace('StatusDescription:','',$ss);
$ss = str_replace('Details:','',$ss);


$last =  $ss[0];

$vv = explode(',',$aa[1]);

$last = explode(',', $last);


if($last[0] == ''){
	$text = 'ไม่พบรหัสติดตามพัสดุ '.$text_in.' โปรดติดตามอีกครั้งภายหลัง ระบบอาจกำลังรอข้อมูลจากผู้รับส่งพัสดุ';
}
else if($last[1] == 'สถานะการนำจ่าย'){
	$text = 'รหัสติดตามพัสดุ '.$text_in.' ได้รับเรียบร้อยแล้ว '.$last[2].' '.$last[2].' เมื่อ '.$last[0];
}
else if($last[1] == 'เตรียมการนำจ่าย'){
	$text = 'รหัสติดตามพัสดุ '.$text_in.' กำลังเตรียมการนำจ่ายถึงผู้รับ ในพื้นที่ '.$last[2].' เมื่อ '.$last[0];
}
else{
	$text = 'รหัสติดตามพัสดุ '.$text_in.' '.$last[1].' โดย '.$last[2].' เมื่อ '.$last[0];
}



			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => 'asdsss'
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => 'U158ee6ff2416863b3961d3a144d8a3c0',
				'messages' => [$messages],
			];
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
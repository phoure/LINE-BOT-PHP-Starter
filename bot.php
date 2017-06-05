<?php
$access_token = '1n4HF8OIC9v65ocWyJAtnzMOUSyiZf6rrP1/xLKQDtFK+nKupweT4dVMBFP79mgVgC35CsJzx3pYOgRFBp7kodhi2d8/tXR1Ked59ISLLlz4yLxNohKdBMuHKnN0odSaT0iZ0ie7ObmpjYh8+jjHUwdB04t89/1O/w1cDnyilFU=';


error_reporting(0); 
function mat ($matches) {
	return mb_convert_encoding(pack('H*',$matches[1]),'UTF-8','UTF-16');
}
function u_decode($input){
	return preg_replace_callback( '/\\\\u([0-9a-zA-Z]{4})/', mat , $input );
}


function debug($var){	
     // หาที่มาและบรรทัดของไฟล์ที่เรียกใช้ฟังก์ชัน debug 
     $trace = reset(debug_backtrace());	
     $trace['file'] = str_replace(str_replace('/','\\',$_SERVER['DOCUMENT_ROOT']).'\\','',$trace['file']);	

     // แสดงค่าที่เก็บในตัวแปร
     echo "<pre>";
     print_r($var);
     echo "</pre>";
     return $var;	
}


$aa = u_decode(file_get_contents('https://www.trackingmore.com/gettracedetail.php?lang=th&tracknumber=RL001247734TH&express=thailand-post'));

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

//debug($ss);

$last =  $ss[0];

$vv = explode(',',$aa[1]);

//debug($vv);

echo $last;


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
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];


if($text == 'g'){
	$text = 'สวัสดี';
}
else{
	$text = 'dd';
}



			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
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
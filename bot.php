<?php
$access_token = '1X99HJ5EIFZjyVYyDhNNh+BKzeJKMMVtG/VY/5Nm+6m8ThCu4Y24AogsRt6g8Rs2Y5THiuEoD30ACy8DEvupJ8yy/01aY5xZIdPLXyxTMAYFDOwgESC8u7oN14MG2hWIJnsIJ3bo0/RKnuDmF3IGqAdB04t89/1O/w1cDnyilFU=';


// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data

	
			// Get text sent
			$text_in = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			$id = $event['source']['userId'];




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

echo "OK";
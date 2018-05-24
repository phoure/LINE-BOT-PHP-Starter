<?php
$access_token = 'fgFWEdG3kij2u4EyyvvzhSPWLCfK8Z2duZ40kmpKgbiIn/HpV6bQe5UgHesnjOa07GizYWFnE0AoDjUnMLj4iEi/PufqScjhbj5QBxDDgeiHm82i9h5zLJ2y9kc0y7+1NlW9CUSbKsUU6X8KUQC26wdB04t89/1O/w1cDnyilFU=';

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 

$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$access_token}";

$strUrl = "https://api.line.me/v2/bot/message/reply";
  $arrPostData = array();
 $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = 'text';
  $arrPostData['messages'][0]['text'] = $arrJson['events'][0]['source']['userId'];


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.line.me/v2/bot/profile/".$arrJson['events'][0]['source']['userId'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer MaNINLONsNr6WVQXl5lw1qHUUEstWHC45HctvmJB0+EghI4B0z9cJfC3BUrsWGrHxB9nEFqGV7B3rrNr14cQjMh1LzeKooYfaxqwmwsCJQFTfXyJrUnsR/mVKm/pKpWWYo9zsijkiWqOjleKvfJRIwdB04t89/1O/w1cDnyilFU=",
    "cache-control: no-cache",
    "postman-token: 7d55f84c-714f-e493-808f-c45ca4bcdfc5"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	

   $response_data = json_decode($response, true);

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.imgur.com/3/image",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "image=".$response_data['pictureUrl'],
  CURLOPT_HTTPHEADER => array(
    "authorization: Client-ID 9247e4c204491c4",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: 8b84fd63-b153-b627-403e-3c8251c250df"
  ),
));
$response_img = curl_exec($curl);
$response_img = json_decode($response_img,true);
$err = curl_error($curl);
curl_close($curl);
		if ($err) {
			 echo 'upload 0';
		} else {
			$response_img_url = $response_img['data']['link'];
			echo $response_img['data']['link'].' ;; '.$response_data['pictureUrl'];
		}

}

if($_GET['post'] == '1'){
	$groupid[] = array('C5ca58854e5e7ae33964770acadc0211d','test');

	//$groupid[] = array('C214e858f2c0e42285b5d56a12f0cfced','drivegay');
	$id[] = 'us6zcni'; $title[]= 'หมอกร อยากเย็ดจัง';  $thumb[] = 'https://pbs.twimg.com/media/DdmwFr9V0AAhjy0.jpg';
	$id[] = '1JvpZrM'; $title[]= 'ชอบท่า หมอกรคงเสียวน่าดู หน้าอย่างเงี่ยนอะ';  $thumb[] = 'https://pbs.twimg.com/media/DdmwKmaU0AAD_pC.jpg';
	$id[] = '2eCLPLk'; $title[]= 'กระตุกชิบหาย โครตเงี่ยนเลยสัส '; $thumb[] = 'https://pbs.twimg.com/media/DdmwcZOU0AA4vQN.jpg';
	$id[] = 'ce4clpg'; $title[]= 'เงี่ยนกับหมอกร'; $thumb[] = 'https://pbs.twimg.com/media/DdmwWo-VwAAhUTg.jpg';
	$id[] = 'RLeTjAY'; $title[]= 'หมอกรกินไอติม'; $thumb[] = 'https://pbs.twimg.com/media/DdmwhmLV0AEtzSK.jpg';
	$id[] = 'w3jlGo2'; $title[]= 'เด็ดสุดตอนนี้ต้องคนนี้. หมอกร'; $thumb[] = 'https://pbs.twimg.com/media/DdmwlX7UQAEha-M.jpg';
	for ($x = 0; $x <= count($groupid)-1; $x++) {
	
		$card = array(
			     [
			     'type' => 'template',
				"altText" => '🎬 แชร์วีดีโอ',
				"template" => array(
				    'type' => 'buttons',
				    'thumbnailImageUrl' => $response_img_url,
				    'imageAspectRatio' => 'rectangle',
				    'imageSize' => 'cover',
				    'imageBackgroundColor' => '#000000',
				    'text' => $response_data['displayName'],
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
				$data = array('to' => $groupid[$x][0], 'messages' => $card);
				send($data, $strUrl, $arrHeader);
		
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
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 ?>

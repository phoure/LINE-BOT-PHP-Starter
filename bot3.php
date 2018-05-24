<?php
$access_token = 'MaNINLONsNr6WVQXl5lw1qHUUEstWHC45HctvmJB0+EghI4B0z9cJfC3BUrsWGrHxB9nEFqGV7B3rrNr14cQjMh1LzeKooYfaxqwmwsCJQFTfXyJrUnsR/mVKm/pKpWWYo9zsijkiWqOjleKvfJRIwdB04t89/1O/w1cDnyilFU=';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.line.me/v2/bot/profile/Ua526fbc34fe537e8405cc502d9b861cd",
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
	$groupid[] = array('C214e858f2c0e42285b5d56a12f0cfced','test');
	/*
	$groupid[] = array('Cdcbc1ac3c747ec546fdd194c0fbf7b1f','clipgaysab');
	$groupid[] = array('C16bffe43b165df3429a722dde84adcfc','konrakphone');
	$groupid[] = array('C5acee5a1fea67f1e79201ded58d1f91d','gkawanrak');
	$groupid[] = array('C04ae8ed4e3d9f6e8de35cd48639b85c0','peodkkongwao1');
	$groupid[] = array('C19be33210e004052910aba5a817621e2','peodklongwao');
	$groupid[] = array('Cd08afe8945428db31485bca7effc88a2','mangkonnimitr');
	
*/
	$id[] = 'us6zcni'; $title[]= 'หมอกร อยากเย็ดจัง';  $thumb[] = 'https://pbs.twimg.com/media/DdmwFr9V0AAhjy0.jpg';
	$id[] = '1JvpZrM'; $title[]= 'ชอบท่า หมอกรคงเสียวน่าดู หน้าอย่างเงี่ยนอะ';  $thumb[] = 'https://pbs.twimg.com/media/DdmwKmaU0AAD_pC.jpg';
	$id[] = '2eCLPLk'; $title[]= 'กระตุกชิบหาย โครตเงี่ยนเลยสัส '; $thumb[] = 'https://pbs.twimg.com/media/DdmwcZOU0AA4vQN.jpg';
	$id[] = 'ce4clpg'; $title[]= 'เงี่ยนกับหมอกร'; $thumb[] = 'https://pbs.twimg.com/media/DdmwWo-VwAAhUTg.jpg';
	$id[] = 'RLeTjAY'; $title[]= 'หมอกรกินไอติม'; $thumb[] = 'https://pbs.twimg.com/media/DdmwhmLV0AEtzSK.jpg';
	$id[] = 'w3jlGo2'; $title[]= 'เด็ดสุดตอนนี้ต้องคนนี้. หมอกร'; $thumb[] = 'https://pbs.twimg.com/media/DdmwlX7UQAEha-M.jpg';
	for ($x = 0; $x <= count($groupid)-1; $x++) {
	$card = array([
		'type' => 'template',
	    "altText" => '🎬 แชร์วีดีโอ',
		"template" => array(
						'type' => 'carousel',
						'columns' => array([
											'thumbnailImageUrl' => $response_img_url,
											'imageBackgroundColor' => '#000000',
											'text' => $response_data['displayName'],
											'defaultAction' =>  array(
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
											),
											'actions' =>  array([
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
											]),
											'imageAspectRatio' => 'rectangle',
											'imageSize' => 'cover'
						)
		]);
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

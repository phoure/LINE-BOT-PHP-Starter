<?php
$access_token = 'MaNINLONsNr6WVQXl5lw1qHUUEstWHC45HctvmJB0+EghI4B0z9cJfC3BUrsWGrHxB9nEFqGV7B3rrNr14cQjMh1LzeKooYfaxqwmwsCJQFTfXyJrUnsR/mVKm/pKpWWYo9zsijkiWqOjleKvfJRIwdB04t89/1O/w1cDnyilFU=';

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
	$id[] = 'กลุ่มคลิปหลุด'; $title[]= 'หมอกร อยากเย็ดจัง';  $thumb[] = 'https://pbs.twimg.com/media/DeAMsvJUwAE59ys.jpg';
	$id[] = 'กลุ่มหนังโป๊'; $title[]= 'ชอบท่า หมอกรคงเสียวน่าดู หน้าอย่างเงี่ยนอะ';  $thumb[] = 'https://pbs.twimg.com/media/DeAMsvKUQAUzA1E.jpg';
	$id[] = 'กลุ่มหนังเกย์'; $title[]= 'กระตุกชิบหาย โครตเงี่ยนเลยสัส '; $thumb[] = 'https://pbs.twimg.com/media/DeAMsvTU0AAdsOl.jpg';
	$id[] = 'กลุ่มเซ็กซ์โฟน'; $title[]= 'เงี่ยนกับหมอกร'; $thumb[] = 'https://pbs.twimg.com/media/DeAMsvKU8AAzXDB.jpg';
	$id[] = 'กลุ่มกล้องเสียว'; $title[]= 'หมอกรกินไอติม'; $thumb[] = 'https://pbs.twimg.com/media/DeANWo7U8AAO5fX.jpg';
	$id[] = 'กลุ่มแจกวาร์ปหนุ่มหล่อสาวสวย'; $title[]= 'เด็ดสุดตอนนี้ต้องคนนี้. หมอกร'; $thumb[] = 'https://pbs.twimg.com/media/DeANWo5VwAA1Uud.jpg';
	$id[] = 'กลุ่มเพื่อนคุยชิลล์ๆ'; $title[]= 'เด็ดสุดตอนนี้ต้องคนนี้. หมอกร'; $thumb[] = 'https://pbs.twimg.com/media/DeAN_7jVQAAv07s.jpg';
	$id[] = 'กลุ่มคอเกม'; $title[]= 'เด็ดสุดตอนนี้ต้องคนนี้. หมอกร'; $thumb[] = 'https://pbs.twimg.com/media/DeANWpXUQAAjQGT.jpg';
	$id[] = 'กลุ่มเล่นหวย'; $title[]= 'เด็ดสุดตอนนี้ต้องคนนี้. หมอกร'; $thumb[] = 'https://pbs.twimg.com/media/DeAN_7rVAAArlQP.jpg';
	$id[] = 'กลุ่มอื่นๆ อีกเพียบ!'; $title[]= 'เด็ดสุดตอนนี้ต้องคนนี้. หมอกร'; $thumb[] = 'https://pbs.twimg.com/media/DeANWo5VwAA1Uud.jpg';

	for ($x = 0; $x <= count($groupid)-1; $x++) {

	$card = array([
		'type' => 'template',
	    "altText" => '🎬 แชร์วีดีโอ',
		"template" => array(
						'type' => 'carousel',
						'columns' => array([
											'thumbnailImageUrl' => $thumb[0],
											'imageBackgroundColor' => '#000000',
											'text' => $title[0],
											'defaultAction' =>  array(
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[0].'&ref='.$groupid[$x][1]
											),
											'actions' =>  array([
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[0].'&ref='.$groupid[$x][1]
															])
											],
								  [
											'thumbnailImageUrl' => $thumb[1],
											'imageBackgroundColor' => '#000000',
											'text' => $title[1],
											'defaultAction' =>  array(
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[1].'&ref='.$groupid[$x][1]
											),
											'actions' =>  array([
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[1].'&ref='.$groupid[$x][1]
															])
											],
								  [
											'thumbnailImageUrl' => $thumb[2],
											'imageBackgroundColor' => '#000000',
											'text' => $title[2],
											'defaultAction' =>  array(
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[2].'&ref='.$groupid[$x][1]
											),
											'actions' =>  array([
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[2].'&ref='.$groupid[$x][1]
															])
											],
								  [
											'thumbnailImageUrl' => $thumb[3],
											'imageBackgroundColor' => '#000000',
											'text' => $title[3],
											'defaultAction' =>  array(
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[3].'&ref='.$groupid[$x][1]
											),
											'actions' =>  array([
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[3].'&ref='.$groupid[$x][1]
															])
											],
								  [
											'thumbnailImageUrl' => $thumb[4],
											'imageBackgroundColor' => '#000000',
											'text' => $title[4],
											'defaultAction' =>  array(
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[4].'&ref='.$groupid[$x][1]
											),
											'actions' =>  array([
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[4].'&ref='.$groupid[$x][1]
															])
											],
								  [
											'thumbnailImageUrl' => $thumb[5],
											'imageBackgroundColor' => '#000000',
											'text' => $title[5],
											'defaultAction' =>  array(
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[5].'&ref='.$groupid[$x][1]
											),
											'actions' =>  array([
																'type' => 'uri',
																'label' => '🎬 ดูคลิปนี้',
																'uri' => 'http://drivegay.com/video/'.$id[5].'&ref='.$groupid[$x][1]
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

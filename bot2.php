<?php
$access_token = 'qNTXzzZpk6jEk57U46RK5iuyMyCjQRgF3GYrEyFOxBasHkdwuGeMMPdViCDbhvFnxB9nEFqGV7B3rrNr14cQjMh1LzeKooYfaxqwmwsCJQGR6x5keAIp7+It88/ShT0XWC+QuAvBtzZpRlCWBvdcaAdB04t89/1O/w1cDnyilFU=';


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
    "altText" => "this is a confirm template",
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

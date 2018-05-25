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
	$id[] = 'กลุ่มคลิปหลุด'; $title[]= 'แจกคลิปหลุด คลิปเสียว มีคนช่วยกันแชร์ตลอด เสียงทั้งวันทั้งคืน';  $thumb[] = 'https://pbs.twimg.com/media/DeAMsvJUwAE59ys.jpg';
	$id[] = 'กลุ่มหนังโป๊'; $title[]= 'กลุ่มสำหรับคนชอบดูหนังโป๊ หนังเสียว ภาพยนตร์เรท แจกลิงก์ดูเต็มเรื่อง';  $thumb[] = 'https://pbs.twimg.com/media/DeAMsvKUQAUzA1E.jpg';
	$id[] = 'กลุ่มหนังเกย์'; $title[]= 'แจกหนัง แชร์คลิป หนุ่มหล่อ เสียว ฟิน'; $thumb[] = 'https://pbs.twimg.com/media/DeAMsvTU0AAdsOl.jpg';
	$id[] = 'กลุ่มเซ็กซ์โฟน'; $title[]= 'หาเพื่อนคลายเงี่ยน เพื่อนเสียว หนุ่มๆ สาวๆ เพียบ!'; $thumb[] = 'https://pbs.twimg.com/media/DeAMsvKU8AAzXDB.jpg';
	$id[] = 'กลุ่มกล้องเสียว'; $title[]= 'กล้องโชว์เสียว จะส่วนตัวหรือกลุ่มก็มาดีลกันได้ในกลุ่มนี้ ตัวเด็ดๆ ทั้งนั้น'; $thumb[] = 'https://pbs.twimg.com/media/DeANWo7U8AAO5fX.jpg';
	$id[] = 'กลุ่มแจกวาร์ปหนุ่มหล่อสาวสวย'; $title[]= 'แจกวาร์ป หนุ่มหล่อ สาวสวย หุ่นแน่น นมใหญ่ ขาว หมวย สวย อึ๋ม ของเพียบ'; $thumb[] = 'https://pbs.twimg.com/media/DeANWo5VwAA1Uud.jpg';
	$id[] = 'กลุ่มเพื่อนคุยชิลล์ๆ'; $title[]= 'กลุ่มเพื่อนๆ คุยกันเหงาๆ ยามว่าง นอนไม่หลับ ดึกดื่นแค่ไหนก็มีเพื่อนคุย เข้ามาคุยกันเถอะ'; $thumb[] = 'https://pbs.twimg.com/media/DeAN_7jVQAAv07s.jpg';
	$id[] = 'กลุ่มคอเกม'; $title[]= 'คอเกมต้องไม่พลาด เหล่าเซียนรออยู่ กลุ่มใหญ่ เกมหลากหลาย ถาม-ตอบเรื่องเกม สารพัดไอที'; $thumb[] = 'https://pbs.twimg.com/media/DeANWpXUQAAjQGT.jpg';
	$id[] = 'กลุ่มเล่นหวย'; $title[]= 'ชาวลุ้นต้องมาที่นี่ เลขเด็ดเยอะ รวบรวมจากหลายแหล่ง แม่นๆ ทั้งนั้น เอามาให้กันฟรีๆ'; $thumb[] = 'https://pbs.twimg.com/media/DeAN_7rVAAArlQP.jpg';
	$id[] = 'กลุ่มอื่นๆ อีกเพียบ!'; $title[]= 'หรือจะกลุ่มอื่นๆ ก็อีกเพียบ สามารถมาค้นหาได้ที่นี่ เพียงพิมพ์ "หากลุ่ม" ก็มีรายชื่อกลุ่มให้ร่วมเข้าอีกเพียบ!'; $thumb[] = 'https://pbs.twimg.com/media/DeANWo5VwAA1Uud.jpg';

	for ($x = 0; $x <= count($groupid)-1; $x++) {

	$card = array([
		'type' => 'template',
	    "altText" => '🎬 แชร์วีดีโอ',
		"template" => array(
						'type' => 'carousel',
						'columns' => array([
								'thumbnailImageUrl' => $thumb[0],
								'imageBackgroundColor' => '#000000',
								'title' => $id[0],
								'text' => $title[0],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[1],
								'imageBackgroundColor' => '#000000',
								'title' => $id[1],
								'text' => $title[1],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[2],
								'imageBackgroundColor' => '#000000',
								'title' => $id[2],
								'text' => $title[2],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[3],
								'imageBackgroundColor' => '#000000',
								'title' => $id[3],
								'text' => $title[3],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[4],
								'imageBackgroundColor' => '#000000',
								'title' => $id[4],
								'text' => $title[4],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[5],
								'imageBackgroundColor' => '#000000',
								'title' => $id[5],
								'text' => $title[5],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[6],
								'imageBackgroundColor' => '#000000',
								'title' => $id[6],
								'text' => $title[6],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[7],
								'imageBackgroundColor' => '#000000',
								'title' => $id[7],
								'text' => $title[7],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[8],
								'imageBackgroundColor' => '#000000',
								'title' => $id[8],
								'text' => $title[8],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[9],
								'imageBackgroundColor' => '#000000',
								'title' => $id[9],
								'text' => $title[9],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => 'เข้าร่วมกลุ่มนี้',
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

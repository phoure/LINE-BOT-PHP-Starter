<?php
$access_token = 'kimeIkhXon3CjV2oBQDdvzI15V7Fe0eIt7gvjAVghuSyvAkhQYJ+fb/M4XQdLe/sQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aISKQnm12R2OjRnrIwKZTywvZtwfusYYzCcp0veGI/U7QdB04t89/1O/w1cDnyilFU=';

if($_GET['post'] == '1'){
	$groupid[] = array('C5ca58854e5e7ae33964770acadc0211d','test');
	
		/*
		
	$groupid[] = array('C0f30acaa7ce585a786e0bfb4afc6ba94','ขายของออนไลน์');
	$groupid[] = array('Cddc9221a10312fc4d4e2bf0abebb537d','กลุ่มขายของ#2');
	$groupid[] = array('Ca50339a267e2c0d17c0254976452070e','woo');

	$groupid[] = array('C1d928e7a66b686c47096843cfa54aea5','hotvip4');
	$groupid[] = array('C7637dca57b09b0b7a88243ce49895ac6','กลุ่ม sexphone 18+');
	$groupid[] = array('Cfb706767723304e5d44b91789bed6ac1','eiei');
	
	$groupid[] = array('Cdcbc1ac3c747ec546fdd194c0fbf7b1f','clipgaysab');
	$groupid[] = array('C16bffe43b165df3429a722dde84adcfc','konrakphone');
	$groupid[] = array('C5acee5a1fea67f1e79201ded58d1f91d','gkawanrak');
	$groupid[] = array('C04ae8ed4e3d9f6e8de35cd48639b85c0','peodkkongwao1');
	$groupid[] = array('C19be33210e004052910aba5a817621e2','peodklongwao');
	$groupid[] = array('Cd08afe8945428db31485bca7effc88a2','mangkonnimitr');
	
*/
	$id[] = 'กลุ่มคลิปหลุด 20+'; $title[]= 'แจกคลิปหลุด คลิปเสียว ช่วยกันแชร์ตลอดทั้งวันทั้งคืน';  $thumb[] = 'https://pbs.twimg.com/media/DeAtpz-VMAAsNcz.jpg';
	$id[] = 'กลุ่มหนังโป๊'; $title[]= 'กลุ่มสำหรับคนชอบดูหนังโป๊ หนังเสียว ภาพยนตร์เรท แจกลิงก์ดูเต็มเรื่อง';  $thumb[] = 'https://pbs.twimg.com/media/DeAWtydU8AMw-7i.jpg';
	$id[] = 'กลุ่มหนังเกย์เสียวๆ'; $title[]= 'แจกหนัง แชร์คลิป หนุ่มหล่อ เสียว ฟิน กล้ามแน่น ควยใหญ่'; $thumb[] = 'https://pbs.twimg.com/media/DeAWtydU8AEUtQd.jpg';
	$id[] = 'กลุ่มคลื่นเหงาสาวเซ็กซ์โฟน'; $title[]= 'หาเพื่อนคลายเงี่ยน เพื่อนเสียว หนุ่มๆ สาวๆ มาพากันเงี่ยนได้ที่นี่'; $thumb[] = 'https://pbs.twimg.com/media/DeAXClcUQAADxv4.jpg';
	$id[] = 'กลุ่มเปิดกล้องเสียว'; $title[]= 'กล้องโชว์เสียว จะส่วนตัวหรือกลุ่มก็มาดีลกันได้ในกลุ่มนี้ มีแต่ตัวเด็ดๆ'; $thumb[] = 'https://pbs.twimg.com/media/DeAXClbVAAAmTeY.jpg';
	$id[] = 'กลุ่มแจกวาร์ปหนุ่มหล่อ-สาวสวย'; $title[]= 'แจกวาร์ป หนุ่มหล่อ สาวสวย หุ่นแน่น นมใหญ่ ของเยอะมาก'; $thumb[] = 'https://pbs.twimg.com/media/DeAWorAVwAAjyOo.jpg';
	$id[] = 'กลุ่มเพื่อนกันคุยชิลล์ๆ'; $title[]= 'กลุ่มเพื่อนๆ คุยกันเหงาๆ ยามว่าง นอนไม่หลับ ดึกดื่นแค่ไหนก็มีเพื่อนคุย'; $thumb[] = 'https://pbs.twimg.com/media/DeAN_7jVQAAv07s.jpg';
	$id[] = 'กลุ่มคอเกม เกมเมอร์'; $title[]= 'คอเกมต้องไม่พลาด กลุ่มใหญ่ ถาม-ตอบเรื่องเกมกับเหล่าเซียนเกม'; $thumb[] = 'https://pbs.twimg.com/media/DeAWoq_UQAAgN6F.jpg:large';
	$id[] = 'กลุ่มเล่นหวย เลขเด็ด'; $title[]= 'ชาวลุ้นต้องมาที่นี่ เลขเด็ดเยอะ รวบรวมจากหลายแหล่ง แม่นๆ ทั้งนั้น'; $thumb[] = 'https://pbs.twimg.com/media/DeAN_7rVAAArlQP.jpg';
	$id[] = 'กลุ่มอื่นๆ อีกเพียบ!'; $title[]= 'มาค้นหากลุ่มอีกมากมายที่นี่ เพียงพิมพ์ "หากลุ่ม" มีรายชื่อกลุ่มให้ร่วมเข้าอีกเพียบ!'; $thumb[] = 'https://pbs.twimg.com/media/DeAY10cV0AIoSaw.jpg:large';

	for ($x = 0; $x <= count($groupid)-1; $x++) {
/*
	$card = array([
		'type' => 'template',
	    "altText" => '🔞 แจกวาร์ปกลุ่มเพียบ!',
		"template" => array(
						'type' => 'carousel',
						'columns' => array([
								'thumbnailImageUrl' => $thumb[0],
								'imageBackgroundColor' => '#000000',
								'title' => $id[0],
								'text' => $title[0],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[1],
								'imageBackgroundColor' => '#000000',
								'title' => $id[1],
								'text' => $title[1],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[2],
								'imageBackgroundColor' => '#000000',
								'title' => $id[2],
								'text' => $title[2],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[3],
								'imageBackgroundColor' => '#000000',
								'title' => $id[3],
								'text' => $title[3],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[4],
								'imageBackgroundColor' => '#000000',
								'title' => $id[4],
								'text' => $title[4],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[5],
								'imageBackgroundColor' => '#000000',
								'title' => $id[5],
								'text' => $title[5],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[6],
								'imageBackgroundColor' => '#000000',
								'title' => $id[6],
								'text' => $title[6],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[7],
								'imageBackgroundColor' => '#000000',
								'title' => $id[7],
								'text' => $title[7],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[8],
								'imageBackgroundColor' => '#000000',
								'title' => $id[8],
								'text' => $title[8],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[9],
								'imageBackgroundColor' => '#000000',
								'title' => $id[9],
								'text' => $title[9],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => '➡ ค้นหากลุ่มอื่นๆ',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ ค้นหากลุ่มอื่นๆ',
									'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
															])
								]),

											'imageAspectRatio' => 'rectangle',
											'imageSize' => 'cover'
						)
		]);
*/
		
		
		
		
		
		$card = array(
			     [
			     'type' => 'template',
				"altText" => 'มาแบ่งปันกลุ่มกัน!',
				"template" => array(
				    'type' => 'buttons',
				    'text' => 'ขณะนี้ระบบกำลังจัดเก็บกลุ่มใหม่เพิ่มจากเพื่อนๆ ที่เข้ามาร่วมกันแนะนำ หากคุณมีกลุ่มที่อยากแนะนำให้เพื่อนๆ อยากเข้า มาแชร์ลิงก์ของกลุ่มไว้ที่นี่เพื่อให้เพื่อนๆ ได้ค้นหาต่อ',
				    'actions' =>  array(['type' => 'uri',
					 'label' => 'แบ่งปันกลุ่มต่อให้เพื่อน',
					 'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
					],['type' => 'message',
					 'label' => 'แบ่งปันอย่างไร?',
					 'uri' => 'แบ่งปันอย่างไร?'
					])
				    )
				]
				);
	

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

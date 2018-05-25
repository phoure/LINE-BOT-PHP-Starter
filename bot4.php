<?php
$access_token = 'kimeIkhXon3CjV2oBQDdvzI15V7Fe0eIt7gvjAVghuSyvAkhQYJ+fb/M4XQdLe/sQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aISKQnm12R2OjRnrIwKZTywvZtwfusYYzCcp0veGI/U7QdB04t89/1O/w1cDnyilFU=';

if($_GET['post'] == '1'){
	$groupid[] = array('C5ca58854e5e7ae33964770acadc0211d','test');
	
	/*
		
	$groupid[] = array('C0f30acaa7ce585a786e0bfb4afc6ba94','ขายของออนไลน์');
	$groupid[] = array('Cddc9221a10312fc4d4e2bf0abebb537d','กลุ่มขายของ#2');
	*/
		/*
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

	$id[] = 'เทคนิคและวิธีโพสต์ในไลน์ ปี2018'; $title[]= 'สอนโปรโมท โพสต์โฆษณาอย่างไรให้เด่น สะดุดตา ใหม่ล่าสุด!';  $thumb[] = 'https://pbs.twimg.com/media/DeDdJgFV0AA8tkL.jpg:large';
	$id[] = 'สอนดึงไลน์ official เข้ากลุ่ม'; $title[]= 'วันนี้คุณสามารถนำแอคเคาท์ LINE@ เข้าร่วมกลุ่มได้แล้ว';  $thumb[] = 'https://pbs.twimg.com/media/DeDdJgEVQAAcNDE.jpg:large';
	$id[] = 'โพสต์อัตโนมัติ ไม่ต้องคอยส่งข้อความเอง'; $title[]= 'ไลน์สามารถรู้เวลา สั่งส่งข้อความไปยังกลุ่มต่างๆ โดยไม่เสีย Reach'; $thumb[] = 'https://pbs.twimg.com/media/DeDdJgFVwAAdSIQ.jpg:large';
	$id[] = 'โพสต์สินค้าให้เด่น ใครๆ ก็เห็น'; $title[]= 'โฆษณาของคุณจะเด่นกว่าใคร ลืมข้อความโฆษณาธรรมดาไปเลย'; $thumb[] = 'https://pbs.twimg.com/media/DeDdJgFVAAA7swv.jpg:large';
	$id[] = 'โพสต์ให้สวยงามน่าซื้อ'; $title[]= 'ส่งข้อความภาพแบบเต็มจอโดยไม่ต้องเสียเงินสักบาท'; $thumb[] = 'https://pbs.twimg.com/media/DeDdMLzU8AAGUiw.jpg';
	$id[] = 'ทำให้ไลน์รู้จักลูกค้าของคุณ'; $title[]= 'ไลน์สามารถเรียกชื่อลูกค้าของคุณได้ สร้างความประทับใจได้ไม่น้อย'; $thumb[] = 'https://pbs.twimg.com/media/DeDdMLzU8AAGUiw.jpg';
	$id[] = 'ส่งข้อความยืนยันออร์เดอร์ง่ายๆ'; $title[]= 'สร้างความน่าเชื่อถือที่มากกว่าคนอื่น ด้วยการส่งข้อความยืนยันถึงลูกค้า'; $thumb[] = 'https://pbs.twimg.com/media/DeDdMMPVAAA829I.jpg:large';
	$id[] = 'ควบคุมได้ทุกอย่างในแอปไลน์'; $title[]= 'เพิ่มความสะดวกสบาย และน่าอัศจรรย์ด้วยการส่งลูกค้าไปทุกที่ที่ต้องการ'; $thumb[] = 'https://pbs.twimg.com/media/DeDdMMPU0AE2NaC.jpg:large';
	$id[] = 'ตอบกลับได้มากกว่า 5 ข้อความ'; $title[]= 'จะกี่ข้อความก็ส่งได้ไม่มีปัญหา ทิ้งข้อจำกัดทั้งข้อความต้อนรับและตอบกลับอัตโนมัติ'; $thumb[] = 'https://pbs.twimg.com/media/DeDdO8_VQAAeaHN.jpg:large';
	$id[] = 'เทคนิคอื่นๆ อีกมากมาย'; $title[]= 'เทคนิคที่ไม่เคยมีใครสอนมาก่อน เปิดสอนฟรีเพียง 1 กลุ่มเต็มปิดลิงก์ทันที รีบด่วน!'; $thumb[] = 'https://pbs.twimg.com/media/DeDdO9WUwAAX1N-.jpg';

	for ($x = 0; $x <= count($groupid)-1; $x++) {
		
		/*
		$card = array([
			'type' => 'text',
			'text' => 'แสดงตัวอย่างการโพสต์ภาพแบบเต็มจอแบบ Rich Message โดยไม่ต้องลงทุน'
		      ],
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://i.imgur.com/pHeEc3g.jpg",
			"altText" => 'มาแบ่งปันกลุ่มกัน!',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						 'type' => 'uri',
          					"linkUri" => "line://ti/p/%40gkw1117o",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			]
			);
*/

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
									'uri' => 'line://ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมกลุ่มนี้',
									'uri' => 'line://nv/camera/'
															])
								],[
								'thumbnailImageUrl' => $thumb[1],
								'imageBackgroundColor' => '#000000',
								'title' => $id[1],
								'text' => $title[1],
								'defaultAction' =>  array(
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'ดึง LINE Official เข้ากลุ่ม'
									),
								'actions' =>  array([
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'ดึง LINE Official เข้ากลุ่ม'
															])
								],[
								'thumbnailImageUrl' => $thumb[2],
								'imageBackgroundColor' => '#000000',
								'title' => $id[2],
								'text' => $title[2],
								'defaultAction' =>  array(
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'ตั้งเวลาโพสต์'
									),
								'actions' =>  array([
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'ตั้งเวลาโพสต์'
															])
								],[
								'thumbnailImageUrl' => $thumb[3],
								'imageBackgroundColor' => '#000000',
								'title' => $id[3],
								'text' => $title[3],
								'defaultAction' =>  array(
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'โพสต์สินค้าให้เด่น'
									),
								'actions' =>  array([
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'โพสต์สินค้าให้เด่น'
															])
								],[
								'thumbnailImageUrl' => $thumb[4],
								'imageBackgroundColor' => '#000000',
								'title' => $id[4],
								'text' => $title[4],
								'defaultAction' =>  array(
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'โพสต์ Rich Message'
									),
								'actions' =>  array([
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'โพสต์ Rich Message'
															])
								],[
								'thumbnailImageUrl' => $thumb[5],
								'imageBackgroundColor' => '#000000',
								'title' => $id[5],
								'text' => $title[5],
								'defaultAction' =>  array(
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'ไลน์รู้จักคุณ'
									),
								'actions' =>  array([
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'ไลน์รู้จักคุณ'
															])
								],[
								'thumbnailImageUrl' => $thumb[6],
								'imageBackgroundColor' => '#000000',
								'title' => $id[6],
								'text' => $title[6],
								'defaultAction' =>  array(
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'การยืนยันออร์เดอร์'
									),
								'actions' =>  array([
									'type' => 'message',
									'label' => 'ดูความสามารถนี้',
									'text' => 'การยืนยันออร์เดอร์'
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

		

		
		/*
		
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
					 'text' => 'แบ่งปันอย่างไร?'
					])
				    )
				]
				);
	

		$data = array('to' => $groupid[$x][0], 'messages' => $card);

*/


		$data = array('to' => $groupid[$x][0], 'messages' => $card);

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

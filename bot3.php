<?php
$access_token = 'kimeIkhXon3CjV2oBQDdvzI15V7Fe0eIt7gvjAVghuSyvAkhQYJ+fb/M4XQdLe/sQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aISKQnm12R2OjRnrIwKZTywvZtwfusYYzCcp0veGI/U7QdB04t89/1O/w1cDnyilFU=';

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);

$textIn = $arrJson['events'][0]['message']['text'];
$idIn = $arrJson['events'][0]['source']['userId'];

$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$access_token}";


	 $strUrl = 'https://api.line.me/v2/bot/message/reply';
 	 $data = array( 'replyToken' => $arrJson['events'][0]['replyToken'], 'type' => 'join');
	 send($data, $strUrl, $arrHeader);

if (strpos($textIn, 'หากลุ่ม') !== false) {
	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.line.me/v2/bot/profile/".$arrJson['events'][0]['source']['userId'],
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_HTTPHEADER => array(
	    "authorization: Bearer ".$access_token,
	    "postman-token: 7d55f84c-714f-e493-808f-c45ca4bcdfc5"
	  ),
	));
	$response = curl_exec($curl);
	$response_data = json_decode($response, true);
	curl_close($curl);
	$id = explode(' ',$textIn);
	 $strUrl = 'https://api.line.me/v2/bot/message/reply';
 	 
	$card = array(
			     [
			     'type' => 'template',
				"altText" => 'แจกวาร์ปกลุ่มเพียบ!',
				"template" => array(
				    'type' => 'buttons',
				    'text' => 'สวัสดี '.$response_data['displayName'].' หากคุณต้องการหากลุ่ม กดปุ่ม "เพิ่มเป็นเพื่อน" และพิมพ์ว่า "หากลุ่ม" ระบบจะแสดงหมวดหมู่ให้เพื่อนๆ เลือกก่อนจะเลือกกลุ่มที่ต้องการเข้า',
				    'defaultAction' =>  array(
					 'type' => 'uri',
					 'label' => '➕ เพิ่มเป็นเพื่อน',
					 'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
				    ),
				    'actions' =>  array(['type' => 'uri',
					 'label' => '➕ เพิ่มเป็นเพื่อน',
					 'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
					])
				    )
				]
				);
				$data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	
	  send($data, $strUrl, $arrHeader);
}
else if (strpos($textIn, 'แบ่งปันอย่างไร?') !== false) {
	
	$card = array(
			     [
			     'type' => 'template',
				"altText" => 'มาแบ่งปันกลุ่มกัน!',
				"template" => array(
				    'type' => 'buttons',
				    'text' => 'LINE Groups คือการรวมรวมไลน์กลุ่มไว้ให้เพื่อนๆ ได้ค้นหา ตอนนี้มีกลุ่มมากกว่า 1,800 กลุ่มที่พร้อมให้เพื่อนๆ ได้กดเข้าตามความต้องการที่ถูกจัดแบ่งเป็นหมวดหมู่ เพียงพิมพ์ "หากลุ่ม"',
				    'actions' =>  array(['type' => 'uri',
					 'label' => 'ลองค้นหากลุ่ม',
					 'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
					])
				    )
				]
				);
	

		$data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
}


else if ($textIn == 'ดึง LINE Official เข้ากลุ่ม') {
	
	$card = array([
			'type' => 'text',
			'text' => 'วันนี้คุณสามามารถดึง LINE Official ให้เข้าไปช่วยงานในกลุ่มของคุณได้แล้ว ด้วยความสามารถรอบด้าน ไม่ว่าจะช่วยโพสต์สินค้า ส่งข้อความ ภาพ วีดีโอ เสียง การแจ้งเตือน หรือโฆษณาต่างๆ ให้ลูกค้าหรือสมาชิกในกลุ่มได้ทราบได้แบบนี้'
		      ]);
	
	 $data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
}


else if ($textIn == 'ดึง LINE Official เข้ากลุ่ม') {
	
	$card = array([
			'type' => 'text',
			'text' => 'วันนี้คุณสามามารถดึง LINE Official ให้เข้าไปช่วยงานในกลุ่มของคุณได้แล้ว ด้วยความสามารถรอบด้าน ไม่ว่าจะช่วยโพสต์สินค้า ส่งข้อความ ภาพ วีดีโอ เสียง การแจ้งเตือน หรือโฆษณาต่างๆ ให้ลูกค้าหรือสมาชิกในกลุ่มได้ทราบได้แบบนี้'
		      ]);
	
	 $data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
}

else if ($textIn == 'ตั้งเวลาโพสต์') {
	
	$card = array([
			'type' => 'text',
			'text' => 'ขณะนี้เวลา '.date("h:i:sa").' ของวันที่ '.date("Y/m/d").' แน่นอนว่าคุณสามารถตั้งเวลาส่งข้อความไปยังกลุ่มหรือข้อความส่วนตัวได้ทุกเมื่อ โดยที่คุณไม่ต้องกดส่งเองเลย ที่สำคัญวิธีนี้ไม่นับ Reach ให้เปลืองด้วย'
		      ]);
	
	 $data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
}

else if ($textIn == 'โพสต์สินค้าให้เด่น' || $_GET['text'] == 'โพสต์สินค้าให้เด่น') {
	
	$card = array(
		     [
		     'type' => 'template',
			"altText" => 'มาแบ่งปันกลุ่มกัน!',
			"template" => array(
			    'type' => 'image_carousel',
			    'columns' => array([
				 'imageUrl' => 'https://i.imgur.com/WkTEjhW.jpg',
				 'action' =>  array(
						 'type' => 'uri',
						 'label' => 'เสื้อเชิ้ตแฟชั่นเกาหลีคอวี',
						 'uri' => 'http://www.lovelyday-shop.com/product/570/%E0%B9%80%E0%B8%AA%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B9%89%E0%B8%95%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%84%E0%B8%AD%E0%B8%A7%E0%B8%B5'
						)
				],[
				 'imageUrl' => 'https://i.imgur.com/VJdkpjG.jpg',
				 'action' =>  array(
						 'type' => 'uri',
						 'label' => 'สีขาว',
						 'uri' => 'http://www.lovelyday-shop.com/product/570/%E0%B9%80%E0%B8%AA%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B9%89%E0%B8%95%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%84%E0%B8%AD%E0%B8%A7%E0%B8%B5'
						)
				],[
				 'imageUrl' => 'https://i.imgur.com/veJd7cq.jpg',
				 'action' =>  array(
						 'type' => 'uri',
						 'label' => 'สีเทาน้ำตาล',
						 'uri' => 'http://www.lovelyday-shop.com/product/570/%E0%B9%80%E0%B8%AA%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B9%89%E0%B8%95%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%84%E0%B8%AD%E0%B8%A7%E0%B8%B5'
						)
				],[
				 'imageUrl' => 'https://i.imgur.com/knaY6dk.jpg',
				 'action' =>  array(
						 'type' => 'uri',
						 'label' => 'สีกรม',
						 'uri' => 'http://www.lovelyday-shop.com/product/570/%E0%B9%80%E0%B8%AA%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B9%89%E0%B8%95%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%84%E0%B8%AD%E0%B8%A7%E0%B8%B5'
						)
				],[
				 'imageUrl' => 'https://i.imgur.com/iRxJ0kz.jpg',
				 'action' =>  array(
						 'type' => 'uri',
						 'label' => 'ด้านหลังมีห่วงเปิดหลัง',
						 'uri' => 'http://www.lovelyday-shop.com/product/570/%E0%B9%80%E0%B8%AA%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B9%89%E0%B8%95%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%84%E0%B8%AD%E0%B8%A7%E0%B8%B5'
						)
				],[
				 'imageUrl' => 'https://i.imgur.com/T7hKyAA.jpg',
				 'action' =>  array(
						 'type' => 'uri',
						 'label' => 'ช่วงแขนมีสายรัดแขนอลูมิเนียมเข้าทรง',
						 'uri' => 'http://www.lovelyday-shop.com/product/570/%E0%B9%80%E0%B8%AA%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B9%89%E0%B8%95%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%84%E0%B8%AD%E0%B8%A7%E0%B8%B5'
						)
				],[
				 'imageUrl' => 'https://i.imgur.com/rqMPOYE.jpg',
				 'action' =>  array(
						 'type' => 'uri',
						 'label' => 'สินค้ามีพร้อมส่ง',
						 'uri' => 'http://www.lovelyday-shop.com/product/570/%E0%B9%80%E0%B8%AA%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B9%89%E0%B8%95%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%84%E0%B8%AD%E0%B8%A7%E0%B8%B5'
						)
				])
			    )
			]
			);
	
	 $data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
}

/*
	
	 $strUrl = 'https://api.line.me/v2/bot/message/push';
 	 $data = array(  'to' => 'C5ca58854e5e7ae33964770acadc0211d',
			'messages' => array([
				'type' => 'text',
				'text' =>  'Group ID: '.$arrJson['events'][0]['source']['groupId']
			]));
	 

*/

function send($data, $strUrl, $arrHeader){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$strUrl);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close ($ch);
}
 



 ?>

<?php

$access_token = 'oeiJGSBWoFxJapOkOH/S9lr+seNwHthJ80HOx6RKPICosBtCsnokTiUPwGVE6JGPQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aI+AximvWt+twJPNhjclozOc0HIRIbh2g0MqTV13iY74AdB04t89/1O/w1cDnyilFU=';
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
$textIn = $arrJson['events'][0]['message']['text'];
$replayId = $arrJson['events'][0]['replyToken'];
$lineId = $arrJson['events'][0]['source']['userId'];

////////////////////////////////////////// get name //////////////////////////////////////////
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.line.me/v2/bot/group/'.$arrJson['events'][0]['source']['groupId'].'/member/'.$lineId,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer ".$access_token,
    "cache-control: no-cache"
  ),
));

$response_user = curl_exec($curl);
$response_user = json_decode($response_user, true);
$userName = $response_user['displayName'];
$userPicture = $response_user['pictureUrl'];



if($textIn == '.'){
			$card = array([
			'type' => 'text',
			'text' => $arrJson['events'][0]['source']['groupId']
		      ]);
	send($card, 'push', 'C5ca58854e5e7ae33964770acadc0211d');
}

if($arrJson['events'][0]['postback']['data'] == 'getcode'){
				$card = array([
						'type' => 'text',
						'text' => "โค้ดส่วนลด 15% ของ $userName คือ [DIS15-$userName]"
					      ],[
				     'type' => 'template',
					"altText" => '🎉 รับโพสต์โฆษณาลงกว่า 600+ กลุ่มไลน์ อัตราถูกสุดเพียง 3.- เท่านั้น!',
										"template" => array(
										    'type' => 'buttons',
					'text' => "โค้ดส่วนลดสามารถใช้ได้ภายใน 24 ชั่วโมง หรือสิทธิ์ใช้โค้ดครบจำนวน",
										    'actions' =>  array([
											 'type' => 'uri',
											 'label' => 'ใช้โค้ด ลด15% ตอนนี้!',
											 'uri' => 'line://ti/p/%40gkw1117o'
										])
					  					  )
					]);
				send($card, 'reply', $replayId);

			$card = array([
			'type' => 'text',
			'text' => "$userName กดใช้โค้ด [DIS15-$userName]"
		      ]);
			send($card, 'push', 'C5ca58854e5e7ae33964770acadc0211d');

}


 	$card = array(['type' => 'join']);
	 send($card, 'reply', $replayId);


if($textIn == 'รับโค้ดคูปองของฉัน' || $arrJson['events'][0]['postback']['data'] == 'getcodefree3'){
				$card = array([
						'type' => 'text',
						'text' => "โค้ดคูปองสิทธิ์ของ $userName คือ [FREE3DAYS-$userName]"
					      ],[
				     'type' => 'template',
					"altText" => '🎉 รับโพสต์โฆษณาลงกว่า 600+ กลุ่มไลน์ อัตราถูกสุดเพียง 3.- เท่านั้น!',
										"template" => array(
										    'type' => 'buttons',
					'text' => "โค้ดคูปองสิทธิ์สามารถใช้ได้ภายใน 24 ชั่วโมง หรือสิทธิ์ใช้โค้ดครบจำนวน",
										    'actions' =>  array([
											 'type' => 'uri',
											 'label' => 'ใช้โค้ดตอนนี้!',
											 'uri' => 'line://ti/p/%40gkw1117o'
										])
					  					  )
					]);
				send($card, 'reply', $replayId);

			$card = array([
			'type' => 'text',
			'text' => "$userName กดใช้โค้ด [FREE3DAY-S$userName]"
		      ]);
			send($card, 'push', 'C5ca58854e5e7ae33964770acadc0211d');

}


 	$card = array(['type' => 'join']);
	 send($card, 'reply', $replayId);


if($arrJson['events'][0]['source']['groupId'] == ''){
	
	$strUrl = 'https://api.line.me/v2/bot/message/reply';
	$card = array([
					'type' => 'text',
					'text' => "ขออภัยครับ ไลน์นี้ไม่สามารถตอบกลับได้ โปรดแอดไลน์ https://line.me/R/ti/p/%40gkw1117o"
				      ],[
     'type' => 'template',
	"altText" => 'โปรดติดต่อเรากลับอีกครั้ง ขออภัยในความไม่สะดวกครับ',
						"template" => array(
						    'type' => 'buttons',
	'text' => 'หรือกดปุ่ม "ติดต่อเรา" สำหรับการสอบถามรายละเอียดบริการ ขออภัยในความไม่สะดวกครับ',
						    'actions' =>  array([
						  'type' => 'uri',
						 'label' => 'ติดต่อเรา',
						 'uri' => 'line://ti/p/%40gkw1117o'
						])
	  					  )
	]
	);
	
	 $data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	send($card, 'reply', $replayId);
	
	
	
	$strUrl = 'https://api.line.me/v2/bot/message/push';
	$card = array([
					'type' => 'text',
					'text' => $arrJson['events'][0]['source']['userId']." : ".$textIn
	]
	);
	
	send($card, 'push', 'C5ca58854e5e7ae33964770acadc0211d');
	
	

}
	

		else if($_GET['banner'] == 'otop'){
			$card = array(
				     [
				     'type' => 'imagemap',
		  			"baseUrl"=> "https://i.imgur.com/dkDMRKb.jpg",
					"altText" => 'พลาดแล้วจะเสียใจ โปรโมชั่น แรงสุดๆ อีกครั้ง #พระมองตาม  #ซื้อ 1 แถม 1 เฉพาะในงาน OTOP Midyear 2018 ณ อิมแพ็คเมืองทองธานี',
					"baseSize" => array(
					    'height' => 1040,
					    'width' => 1040
					    ),
					  'actions' =>  array([
								'type' => 'uri',
		          					"linkUri" => "line://ti/p/%40mongtaam",
								 "area" => array(
								    'x' => 0,
								    'y' => 0,
								    'height' => 1040,
								    'width' => 1040
								    )
								])
					]
					);
			 send($card, 'push', $group);
		}

		else if($_GET['banner'] == 'car'){
		$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://image.ibb.co/bTbs5J/Untitled_12.jpg",
			"altText" => 'โปร 1 ได้ 5 แค่ 590.- สำหรับคนรักรถ บล็อกสีรถไม่ให้เก่า กันแดด กันน้ำ เคลือบแก้วเองได้ง่ายๆ แค่ 10 นาที',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						'type' => 'uri',
          					"linkUri" => "line://ti/p/%40ipb1967m",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			]
			);
			 send($card, 'push', $group);
		}


		else if($_GET['banner'] == '56tps'){
		$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://i.imgur.com/n39okU2.jpg",
			"altText" => '🎉 สำรองที่นั่งตอนนี้ ฟรี! มูลค่า 3,500.- กับการสัมนาหัวข้อ "ทางด่วนพิเศษเป็นเศรษฐีอสังหาฯ สู่ความร่ำรวยตลอดกาล ด้วยความเร็วแสง"',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						'type' => 'uri',
          					"linkUri" => "https://goo.gl/forms/ocqC2Q9fcwswHNS83",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			]
			);
			 send($card, 'push', $group);
		}

				else if($_GET['banner'] == 'sasina'){
		$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://i.imgur.com/jcSX8sc.jpg",
			"altText" => 'สุดยอดสินค้าใช้ดี จากส่วนผสมของผงทองคำ  บำรุงด้วยโปรตีนจากรังไหม ผงไข่มุก สวยเป๊ะทั้งวัน  ขาว เนียนใส ควบคุมความมัน',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						'type' => 'uri',
          					"linkUri" => "line://ti/p/%40tfo4590a",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			]
			);
			 send($card, 'push', 'Cc7a68d68e998b6c44c864090796b72fc');
		}





function emoji($code){
$bin = hex2bin(str_repeat('0', 8 - strlen($code)) . $code);
$emoticon =  mb_convert_encoding($bin, 'UTF-8', 'UTF-32BE');
return $emoticon;
}


function send($card,$target ,$to){
	
	$access_token = 'oeiJGSBWoFxJapOkOH/S9lr+seNwHthJ80HOx6RKPICosBtCsnokTiUPwGVE6JGPQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aI+AximvWt+twJPNhjclozOc0HIRIbh2g0MqTV13iY74AdB04t89/1O/w1cDnyilFU=';
	$arrHeader = array();
	$arrHeader[] = "Content-Type: application/json";
	$arrHeader[] = "Authorization: Bearer {$access_token}";
	
	
	if($target == 'reply'){
		$strUrl = 'https://api.line.me/v2/bot/message/reply';
		$data = array('replyToken' => $to, 'messages' => $card);
	}
	else if($target == 'push'){
		$strUrl = 'https://api.line.me/v2/bot/message/push';
		$data = array('to' => $to, 'messages' => $card);
	}
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$strUrl);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	echo $result ;
	curl_close ($ch);
}

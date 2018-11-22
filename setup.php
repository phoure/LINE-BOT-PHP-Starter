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
$groupId = $arrJson['events'][0]['source']['groupId'];



if($userName == 'Methasit'){
			$card = array([
			'type' => 'text',
			'text' => '$groupid[] = array(\''.$groupId.'\', \''.$textIn.'\'); // '.date('j/n/y').''
		      ]);
	send($card, 'push', 'C5ca58854e5e7ae33964770acadc0211d');

	$card2 = array(
		     [
		     'type' => 'text',
  			"text"=> '🎉 โพสต์โฆษณาแบบเต็มจอลง 800 กลุ่มธุรกิจ เพียงวันละ 4.-',
			],[
		     'type' => 'imagemap',
  			"baseUrl"=> 'https://i.imgur.com/sT9qwR8.jpg',
			"altText" => '🎉 โพสต์โฆษณาลงกว่า 800+ กลุ่มธุรกิจ โฆษณาแบบเต็มจอ เห็นชัดเจนกว่า เด่นกว่า สามารถแตะที่ภาพได้ ราคาถูก คุ้มค่า เห็นผล ดีต่อธุรกิจ อัตราถูกสุดเพียงวันละ 4 บาท เท่านั้น',
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
						],[
			     	 'type' => 'flex',
			     	 'altText' => '🎉 โพสต์โฆษณาลงกว่า 800+ กลุ่มธุรกิจ โฆษณาแบบเต็มจอ เห็นชัดเจนกว่า เด่นกว่า สามารถแตะที่ภาพได้ ราคาถูก คุ้มค่า เห็นผล ดีต่อธุรกิจ อัตราถูกสุดเพียงวันละ 4 บาท เท่านั้น',
			     	 'contents' => array(
							     	 	'type' => 'bubble',
										'body' => array(
													    'type' => 'box',
													    'layout' => 'vertical',
													    'contents' =>  array([
																			'type' => 'box',
																		    'layout' => 'horizontal',
																	        'margin' => 'md',
												  							'contents' =>  array([
																								'type' => 'image',
																	          					"url" => 'https://i.imgur.com/tqFp8rP.png',
																					            "aspectRatio" => "1:1",
																	          					"size" => "sm",
        																						"align" => "center"
																								]),
																		],[
																				'type' => 'box',
																			    'layout' => 'horizontal',
																			   	'margin' => 'sm',
													  							'contents' =>  array([
																									'type' => 'text',
																		          					"text" => 'โฆษณาเต็มจอ!',
																		          					'color' => '#ffffff',
																	          						"size" => "xl",
	        																						"align" => "center",
    																							    "weight" => "bold",
																			   						'wrap' => true
																				]),
																		]


																		,[
																				'type' => 'box',
																			    'layout' => 'horizontal',
																			   	'margin' => 'xl',
													  							'contents' =>  array([
																									'type' => 'text',
																		          					"text" => 'โพสต์โฆษณาบนกลุ่มไลน์ให้เด่น สวย ปัง ขายดีกว่าใคร ไปยัง 800+ กลุ่มไลน์ธุรกิจ คนเห็นหลักแสน',
																		          					'color' => '#ffffff',
	        																						"align" => "center",
																			   						'wrap' => true
																				]),
																			]


																			,[
																				'type' => 'box',
																			    'layout' => 'baseline',
																			   	'margin' => 'xl',
													  							'contents' =>  array([
																									'type' => 'icon',
																		          					"url" => 'https://i.imgur.com/muVgU3s.png',
																		          					'size' => 'xs',
																				],[
																									'type' => 'text',
																		          					"text" => 'ภาพโฆษณาเด่น ชัด เต็มจอ!',
																		          					'color' => '#ffffff',
																			   						'wrap' => true,
																			   						'margin' => 'sm',
																		          					'size' => 'xs'
																				]),
																			],[
																				'type' => 'box',
																			    'layout' => 'baseline',
																			   	'margin' => 'xs',
													  							'contents' =>  array([
																									'type' => 'icon',
																		          					"url" => 'https://i.imgur.com/muVgU3s.png',
																		          					'size' => 'xs'
																				],[
																									'type' => 'text',
																		          					"text" => 'ภาพสามารถแตะให้แอดไลน์ หรือเว็บไซต์',
																		          					'color' => '#ffffff',
																			   						'wrap' => true,
																			   						'margin' => 'sm',
																		          					'size' => 'xs'
																				]),
																			],[
																				'type' => 'box',
																			    'layout' => 'baseline',
																			   	'margin' => 'xs',
													  							'contents' =>  array([
																									'type' => 'icon',
																		          					"url" => 'https://i.imgur.com/muVgU3s.png',
																		          					'size' => 'xs'
																				],[
																									'type' => 'text',
																		          					"text" => 'มีมากถึง 800+ กลุ่ม ไม่ต้องหากลุ่มเอง',
																		          					'color' => '#ffffff',
																			   						'wrap' => true,
																			   						'margin' => 'sm',
																		          					'size' => 'xs'
																				]),
																			],[
																				'type' => 'box',
																			    'layout' => 'baseline',
																			   	'margin' => 'xs',
													  							'contents' =>  array([
																									'type' => 'icon',
																		          					"url" => 'https://i.imgur.com/muVgU3s.png',
																		          					'size' => 'xs'
																				],[
																									'type' => 'text',
																		          					"text" => 'ทำงานอัตโนมัติ แม่นยำ ไม่ต้องคอยส่งเอง',
																		          					'color' => '#ffffff',
																			   						'wrap' => true,
																			   						'margin' => 'sm',
																		          					'size' => 'xs'
																				]),
																			],[
																				'type' => 'box',
																			    'layout' => 'baseline',
																			   	'margin' => 'xs',
													  							'contents' =>  array([
																									'type' => 'icon',
																		          					"url" => 'https://i.imgur.com/muVgU3s.png',
																		          					'size' => 'xs'
																				],[
																									'type' => 'text',
																		          					"text" => 'ดูประวัติการทำงานได้ตลอดเวลา',
																		          					'color' => '#ffffff',
																			   						'wrap' => true,
																			   						'margin' => 'sm',
																		          					'size' => 'xs'
																				]),
																			],[
																				'type' => 'box',
																			    'layout' => 'baseline',
																			   	'margin' => 'xs',
													  							'contents' =>  array([
																									'type' => 'icon',
																		          					"url" => 'https://i.imgur.com/muVgU3s.png',
																		          					'size' => 'xs'
																				],[
																									'type' => 'text',
																		          					"text" => 'ปรับเปลี่ยนโฆษณาได้ด้วยตัวเองง่ายๆ',
																		          					'color' => '#ffffff',
																			   						'wrap' => true,
																			   						'margin' => 'sm',
																		          					'size' => 'xs'
																				]),
																			],[
																				'type' => 'box',
																			    'layout' => 'baseline',
																			   	'margin' => 'xs',
													  							'contents' =>  array([
																									'type' => 'icon',
																		          					"url" => 'https://i.imgur.com/muVgU3s.png',
																		          					'size' => 'xs'
																				],[
																									'type' => 'text',
																		          					"text" => 'แพ็คเกจหลากหลาย เลือกตามความเหมาะสม',
																		          					'color' => '#ffffff',
																			   						'wrap' => true,
																			   						'margin' => 'sm',
																		          					'size' => 'xs'
																				]),
																			]
																		),
																			])
														),
									'footer' => array(
												    'type' => 'box',
												    'layout' => 'vertical',
												    'contents' =>  array([
																			'type' => 'button',
																			'style' => 'link',
												          					'action' => array(
																						    'type' => 'uri',
																						    'label' => 'สอบถามเพิ่มเติม',
																						    'uri' => 'line://ti/p/%40gkw1117o'
																							),
												          					'style' => 'secondary',
												          					'color' => '#ffffff',
																	        'margin' => 'xl'
																		],[
																				'type' => 'box',
																			    'layout' => 'horizontal',
																			   	'margin' => 'xl',
													  							'contents' =>  array([
																									'type' => 'text',
																		          					"text" => 'พิเศษ! สำหรับวันนี้ รับโปรโมชั่นโฆษณาสุดคุ้ม',
																		          					'color' => '#ffffff',
	        																						"align" => "center",
    																							    "weight" => "bold",
																			   						'wrap' => true
																				])
													),
										
			     	 									'styles' => array(
													    'body' => array(
													    'backgroundColor' => '#0b8bb0'),
													    'footer' => array(
													    'backgroundColor' => '#0b8bb0')
														)
									    )
				]);
				
	
	send($card2, 'reply', $replayId);
	
	
	
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

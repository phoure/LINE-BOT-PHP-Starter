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

if (strpos($textIn, 'twitter.com') !== false) {
 
 require 'app_tokens.php';
 require 'tmhOAuth.php';
 $connection = new tmhOAuth(array(
   'consumer_key'    => $consumer_key,
   'consumer_secret' => $consumer_secret,
   'user_token'      => $user_token,
   'user_secret'     => $user_secret
 ));
	 $startsAt = strpos($textIn, "status/") + strlen("status/");
	$twitter_id_search = substr ($textIn , $startsAt, 18 );
  $connection->request('GET', $connection->url('1.1/statuses/show'), array(
  'id' => $twitter_id_search, 'tweet_mode' => 'extended'));
          
                
  // Get the HTTP response code for the API request
  $response_code = $connection->response['code'];
  // Convert the JSON response into an array
  $response_data = json_decode($connection->response['response'],true);
  // A response code of 200 is a success
	if ($response_code == 200) {
 
  if($response_data['extended_entities']['media'][0]['type'] == 'photo'){
    if(count($response_data['extended_entities']['media'])-1 == 3){
    $data = array(
    'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
    'messages' => array([
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][0]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][0]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][1]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][1]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][2]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][2]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][3]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][3]['media_url_https'].':thumb',
      ],
        [
          'type' => 'text',
          'text' => 'ดึงภาพจากทวีต จำนวน 4 ภาพ 😀'
        ]));
     }
    else if(count($response_data['extended_entities']['media'])-1 == 2){
    $data = array(
    'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
    'messages' => array([
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][0]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][0]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][1]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][1]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][2]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][2]['media_url_https'].':thumb',
      ],
        [
          'type' => 'text',
          'text' => 'ดึงภาพจากทวีต จำนวน 3 ภาพ 😀'
        ]));
     }
    else if(count($response_data['extended_entities']['media'])-1 == 1){
    $data = array(
    'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
    'messages' => array([
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][0]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][0]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][1]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][1]['media_url_https'].':thumb',
      ],
        [
          'type' => 'text',
          'text' => 'ดึงภาพจากทวีต จำนวน 2 ภาพ 😀'
        ]));
     }
    else if(count($response_data['extended_entities']['media'])-1 == 0){
    $data = array(
    'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
    'messages' => array([
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][0]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][0]['media_url_https'].':thumb',
      ],
        [
          'type' => 'text',
          'text' => 'ดึงภาพจากทวีต จำนวน 1 ภาพ 😀'
        ]));
     }
  } //photo
  
  else if($response_data['extended_entities']['media'][0]['type'] == 'video'){
	
        $max = array(intval($response_data['extended_entities']['media'][0]['video_info']['variants'][0][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][1][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][2][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][3][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][4][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][5][bitrate]));
  $response_code = $connection->response['code'];
  $response_data = json_decode($connection->response['response'],true);
        $maxs = array_search(max($max), $max);
      $data = array(
      'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
      'messages' => array([
          'type' => 'video',
          'originalContentUrl' => $response_data['extended_entities']['media'][0]['video_info']['variants'][$maxs]['url'],
          'previewImageUrl' => $response_data['extended_entities']['media'][0]['media_url_https'],
        ],
        [
          'type' => 'text',
          'text' => '🎞 ดึงวีดีโอจากทวีตมาให้เพื่อนๆ แล้ว 😀',
        ]));
} //video
  else{
	  $data = array(
	'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
	'messages' => array([
			'type' => 'text',
			'text' => 'ไม่สามารถดึงไฟล์จากทวิตเตอร์ได้ อาจด้วยเป็นบัญชีตั้งส่วนตัวไว้ หรือทวีตอาจมีปัญหา'
		]));
	  
	  
  }
}//200
	else{
	  $data = array(
	'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
	'messages' => array([
			'type' => 'text',
			'text' => 'ไม่สามารถดึงไฟล์จากทวิตเตอร์ได้ อาจด้วยเป็นบัญชีตั้งส่วนตัวไว้ หรือทวีตอาจมีปัญหา'
		]));
	  
	  
  }
	send($data, $strUrl, $arrHeader);
}// tweet

else if (strpos($textIn, 'หากลุ่ม') !== false) {
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
					 'uri' => 'line://ti/p/%40gkw1117o'
				    ),
				    'actions' =>  array(['type' => 'uri',
					 'label' => '➕ เพิ่มเป็นเพื่อน',
					 'uri' => 'line://ti/p/%40gkw1117o'
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
				"altText" => 'แจกวาร์ปกลุ่มเพียบ!',
				"template" => array(
				    'type' => 'buttons',
				    'text' => 'LINE Groups คือการรวมรวมไลน์กลุ่มไว้ให้เพื่อนๆ ได้ค้นหา ตอนนี้มีกลุ่มมากกว่า 1,800 กลุ่มที่พร้อมให้เพื่อนๆ ได้กดเข้าตามความต้องการที่ถูกจัดแบ่งเป็นหมวดหมู่ เพียงพิมพ์ "หากลุ่ม"',
				    'actions' =>  array(['type' => 'uri',
					 'label' => 'ลองค้นหากลุ่ม',
					 'uri' => 'line://ti/p/%40gkw1117o'
					])
				    )
				]
				);
	
		$data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
}
else if ($textIn == 'ดึง LINE@ เข้ากลุ่ม') {
	
	$card = array([
			'type' => 'text',
			'text' => 'สอนเทคนิควิธีการดึง LINE@ หรือ LINE Official ให้สามารถเข้ากลุ่มได้ ให้ LINE@ สามารถช่วยงานของคุณได้ ไม่ว่าจะช่วยโพสต์สินค้า ส่งข้อความ ภาพ วีดีโอ เสียง การแจ้งเตือน หรือโฆษณาต่างๆ ให้ลูกค้าหรือสมาชิกในกลุ่มได้ทราบได้แบบนี้'
		      ]);
	
	 $data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	last();
	
}
else if ($textIn == 'กระจายโฆษณา') {
	
	$card = array([
			'type' => 'text',
			'text' => 'คุณสามารถโพสต์โฆษณาของคุณไปยังกลุ่มนับพันได้โดยที่คุณไม่ต้องเข้ากลุ่มเหล่านั้น ผู้คนที่อยู่ในกลุ่มเหล่านั้นจะเห็นโฆษณาของคุณอย่างชัดเจน มีวิธีพิเศษในการประกาศโฆษณาของคุณได้ง่ายและทันทีโดยไม่ต้องลงทุนใดๆ สามารถตั้งเวลาการโพสได้ เลือกประเภทของกลุ่มได้ หรือจะกระจายโฆษณาทั้งหมดไปยังกลุ่มทั้งหมดไม่จำกัดทุกๆ ชั่วโมงก็ยังทำได้'
		      ]);
	
	 $data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	last();
	
}
else if ($textIn == 'โพสต์สินค้าให้เด่น') {
	
	$card = array(
		     [
		     'type' => 'template',
			"altText" => 'สอนโปรโมท โพสต์โฆษณาในไลน์อย่างไรให้เด่น สะดุดตา 2018',
			"template" => array(
			    'type' => 'image_carousel',
			    'columns' => array([
				 'imageUrl' => 'https://i.imgur.com/rqMPOYE.jpg',
				 'action' =>  array(
						 'type' => 'uri',
						 'label' => 'เสื้อเชิ้ตเกาหลี',
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
						 'label' => 'สีน้ำตาลเทา',
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
						 'label' => 'มีห่วงเปิดหลัง',
						 'uri' => 'http://www.lovelyday-shop.com/product/570/%E0%B9%80%E0%B8%AA%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B9%89%E0%B8%95%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%84%E0%B8%AD%E0%B8%A7%E0%B8%B5'
						)
				],[
				 'imageUrl' => 'https://i.imgur.com/T7hKyAA.jpg',
				 'action' =>  array(
						 'type' => 'uri',
						 'label' => 'สายรัดอลูมิเนียม',
						 'uri' => 'http://www.lovelyday-shop.com/product/570/%E0%B9%80%E0%B8%AA%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B9%89%E0%B8%95%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%84%E0%B8%AD%E0%B8%A7%E0%B8%B5'
						)
				],[
				 'imageUrl' => 'https://i.imgur.com/WkTEjhW.jpg',
				 'action' =>  array(
						 'type' => 'uri',
						 'label' => 'ของพร้อมส่ง',
						 'uri' => 'http://www.lovelyday-shop.com/product/570/%E0%B9%80%E0%B8%AA%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B9%89%E0%B8%95%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%84%E0%B8%AD%E0%B8%A7%E0%B8%B5'
						)
				])
			    )
			],[
			'type' => 'text',
			'text' => 'เสื้อผ้าแฟชั่นกาหลีเชิ้ตคอวี ใช้ผ้าเชิ้ตอย่างดีใส่สบายมากๆ ด้านหลังมีห่วงเปิดหลัง ช่วงแขนมีสายรัดแขนอลูมิเนียมเข้าทรงแขน งานน่ารัก มีให้เลือก 3 สี สีขาว สีน้ำตาลเทา และสีกรม'
		      ],[
			'type' => 'text',
			'text' => 'ตัวอย่างการโพสต์ขายสินค้าให้เด่น และน่าสนใจ'
		      ]
			);
	 $data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	  send($data, $strUrl, $arrHeader);
	last();
}
else if ($textIn == 'โพสต์ Rich Message') {
$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://i.imgur.com/pHeEc3g.jpg",
			"altText" => 'สอนการโพสต์ภาพเต็มจอแบบ Rich Message โดยไม่ต้องลงทุนซื้อแพ็คเกจ',
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
			'type' => 'text',
			'text' => 'ตัวอย่างการส่งข้อความภาพเต็มจอและกดได้แบบ Rich Message ได้ฟรี โดยไม่ต้องลงทุนซื้อแพ็คเกจ ส่งได้ทั้งกระจายไปยังลูกค้าของคุณหรือส่งในกลุ่มก็ได้'
		      ]
			);
	 $data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	last();
}
else if ($textIn == 'ไลน์รู้จักฉัน?') {
	$card = array(
			     [
			     'type' => 'template',
				"altText" => 'สอนโปรโมท โพสต์โฆษณาในไลน์อย่างไรให้เด่น สะดุดตา 2018',
				"template" => array(
				    'type' => 'buttons',
				    'text' => 'แน่นอนว่าฉันรู้จักคุณ และทุกคนที่นี่ คุณสร้างความประทับใจในบริการ วิธีให้ LINE@ ของคุณสามารถรู้ชื่อของลูกค้า ภาพโปรไฟล์ หรือแม้แต่สถานะที่คุณตั้งอยู่ตอนนี้ ลองให้ไลน์กรุ๊ปเรียกคุณดูสิ',
				    'actions' =>  array([
					  'type' => 'message',
					 'label' => 'ลองให้ไลน์กรุ๊ปเรียกฉัน',
					 'text' => 'สวัสดีไลน์กรุ๊ป'
					],[
					  'type' => 'message',
					 'label' => 'ลองส่องสถานะของฉัน',
					 'text' => 'ส่องสถานะของฉัน'
					])
				    )
				]
				);
	
	$data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
}
else if ($textIn == 'สวัสดีไลน์กรุ๊ป') {
	
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
	
	$card = array([
			'type' => 'text',
			'text' => 'สวัสดี '.$response_data['displayName']
		      ]);
	
	$data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	last();
}
else if ($textIn == 'ส่องสถานะของฉัน') {
	
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
	
	$card = array([
			'type' => 'text',
			'text' => 'สวัสดี '.$response_data['displayName'].' สถานะของคุณคือ '.$response_data['statusMessage']
		      ]);
	
	$data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	last();
}
else if ($textIn == 'การส่งแบบฟอร์ม') {
	
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
	
		 $card = array([
			'type' => 'text',
			'text' => 'คุณสามารถส่งแบบฟอร์มถึงลูกค้าของคุณได้ ซึ่งสามารถนำไปประยุกต์ได้มากมาย เช่นตัวอย่างการใช้งานแบบฟอร์มนี้'
		      ],[
				'type' => 'template',
				'altText' => 'สอนวิธีจัดการร้านค้าออนไลน์รูปแบบใหม่ 2018',
				'template' =>  array('type' => 'confirm',
						      'text' =>  'สวัสดี คุณ '.$response_data['displayName'].' ออร์เดอร์ของคุณหมายเลข #008888 1.เค้กสตอวเบอร์รี่ 3 ปอนด์ 1 ชิ้น 2.บราวนี่ช็อกโกแล็ต 3 ชิ้น 3.ชุดเทียนวันเกิด 1 ชุด *โปรดยืนยันออร์เดอร์ทั้งหมดของคุณเพื่อที่เราจะได้ทำการจัดส่ง',
							    'actions' =>  array([
								    'type' => 'message',
								   'label' => 'ยืนยัน',
								   'text' => 'ยืนยันออร์เดอร์'
								],[
								    'type' => 'message',
								   'label' => 'เปลี่ยน',
								   'text' => 'ขอปรับเปลี่ยนออร์เดอร์'
								])
						    )
			            ],[
				'type' => 'template',
				'altText' => 'สอนวิธีจัดการร้านค้าออนไลน์รูปแบบใหม่ 2018',
				'template' =>  array('type' => 'confirm',
						      'text' =>  'คุณต้องการติดต่อเราหรือไม่?',
							    'actions' =>  array([
								    'type' => 'message',
								   'label' => 'ต้องการ',
								   'text' => 'ต้องการ'
								],[
								    'type' => 'message',
								   'label' => 'ไม่ต้องการ',
								   'text' => 'ไม่ต้องการ'
								])
						    )
			            ],[
				'type' => 'template',
				'altText' => 'สอนวิธีจัดการร้านค้าออนไลน์รูปแบบใหม่ 2018',
				'template' =>  array('type' => 'confirm',
						      'text' =>  'คุณได้รับสินค้าของเราหรือยัง?',
							    'actions' =>  array([
								    'type' => 'message',
								   'label' => 'ได้รับแล้ว',
								   'text' => 'ได้รับแล้ว'
								],[
								    'type' => 'message',
								   'label' => 'ยังไม่ได้รับ',
								   'text' => 'ยังไม่ได้รับ'
								])
						    )
			            ]);
	
	$data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	last();
}
else if ($textIn == 'การกำหนดเส้นทาง') {
	$card = array([
			'type' => 'text',
			'text' => 'ตัวอย่างระบบการสร้างเส้นทางไปยังส่วนต่างๆ ของแอปฯไลน์ เว็บไซต์ หรือแหล่งข้อมูลต่างๆ ที่สามารถนำไปต่อยอดได้มากมายไม่จำกัด'
		      ],[
			     'type' => 'template',
				"altText" => 'สอนโปรโมท โพสต์โฆษณาในไลน์อย่างไรให้เด่น สร้างความแตกต่าง',
				"template" => array(
				    'type' => 'buttons',
				    'text' => 'ชำระเงินแล้ว? คุณสามารถส่งหลักฐานการชำระได้ทันที',
				    'actions' =>  array([
					  'type' => 'uri',
					 'label' => 'ถ่ายรูปหลักฐาน',
					 'uri' => 'line://nv/camera/'
					],[
					  'type' => 'uri',
					 'label' => 'อัปโหลดหลักฐาน',
					 'uri' => 'line://nv/cameraRoll/single'
					])
				    )
				],[
			     'type' => 'template',
				"altText" => 'สอนโปรโมท โพสต์โฆษณาในไลน์อย่างไรให้เด่น สร้างความแตกต่าง',
				"template" => array(
				    'type' => 'buttons',
				    'text' => 'คุณสามารถชี้ปลายทางไปที่ใดก็ได้ สามารถต่อยอดบริการได้มากมายได้ไม่จำกัด',
				    'actions' =>  array([
					  'type' => 'uri',
					 'label' => 'หน้าเพิ่มเพื่อน',
					 'uri' => 'line://nv/addFriends'
					],[
					  'type' => 'uri',
					 'label' => 'ร้านขายสติกเกอร์',
					 'uri' => 'line://nv/stickerShop'
					],[
					  'type' => 'uri',
					 'label' => 'ไทม์ไลน์',
					 'uri' => 'line://nv/timeline'
					],[
					  'type' => 'uri',
					 'label' => 'การตั้งค่า',
					 'uri' => 'line://nv/settings'
					])
				    )
				]
				);
	
	$data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	last();
}
else if ($textIn == 'ดูตัวอย่างผลงาน ออกแบบภาพโฆษณา') {
	
	 $strUrl = 'https://api.line.me/v2/bot/message/push';
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/8d3fecb9f6624ddfdc6a1934141766f1.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/8d3fecb9f6624ddfdc6a1934141766f1.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/7f00ecf9b6d3dc48804ed4b5f43fb8fd.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/7f00ecf9b6d3dc48804ed4b5f43fb8fd.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/bdba9eae4cad61ddb3c9e3a086372afe.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/bdba9eae4cad61ddb3c9e3a086372afe.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/2f7596e238d5854d51eff9b43d5f3aaf.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/2f7596e238d5854d51eff9b43d5f3aaf.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://image.ibb.co/jZNZJJ/squar_a.jpg',
		'previewImageUrl' => 'https://image.ibb.co/jZNZJJ/squar_a.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	$card = array([
     'type' => 'template',
	"altText" => 'ออกแบบภาพโฆษณาคุณภาพ แต่ง-ถ่ายภาพสินค้า ราคาโดน สำหรับธุรกิจของท่าน',
	"template" => array(
	    'type' => 'buttons',
	    'text' => 'ตัวอย่างผลงาน ออกแบบภาพโฆษณา หากสนใจงานคุณภาพ ราคาถูก สำหรับธุรกิจและร้านค้าของคุณ สามารถสอบถามรายละเอียดเพิ่มเติมได้เลยนะครับ',
	    'actions' =>  array([
		  'type' => 'uri',
		 'label' => 'สอบถามรายละเอียด',
		 'uri' => 'line://ti/p/%40giy8621v'
		])
	    )
	]
	);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	//last();
}


else if ($textIn == 'ดูตัวอย่างผลงาน ถ่ายภาพสินค้า') {
	
	 $strUrl = 'https://api.line.me/v2/bot/message/push';
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/947751944847dcb99d8acfaabcaeadd3.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/947751944847dcb99d8acfaabcaeadd3.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/3e4507e0733279f56f997c7130813183.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/3e4507e0733279f56f997c7130813183.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/7f9ac20f569e7f9e2d92e98e22f6f158.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/7f9ac20f569e7f9e2d92e98e22f6f158.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/8e5b55a4a21dd75b8a1b631c84bcb5f7.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/8e5b55a4a21dd75b8a1b631c84bcb5f7.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/f86e47ba78dcb188600517f8b83d9543.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/f86e47ba78dcb188600517f8b83d9543.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	$card = array([
     'type' => 'template',
	"altText" => 'ออกแบบภาพโฆษณาคุณภาพ แต่ง-ถ่ายภาพสินค้า ราคาโดน สำหรับธุรกิจของท่าน',
	"template" => array(
	    'type' => 'buttons',
	    'text' => 'ตัวอย่างผลงาน ถ่ายภาพสินค้า หากสนใจงานคุณภาพ ราคาถูก สำหรับธุรกิจและร้านค้าของคุณ สามารถสอบถามรายละเอียดเพิ่มเติมได้เลยนะครับ',
	    'actions' =>  array([
		  'type' => 'uri',
		 'label' => 'สอบถามรายละเอียด',
		 'uri' => 'line://ti/p/%40giy8621v'
		])
	    )
	]
	);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	//last();
}

else if ($textIn == 'ดูตัวอย่างผลงาน ไดคัตและแต่งภาพสินค้า') {
	
	 $strUrl = 'https://api.line.me/v2/bot/message/push';
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/3e3a73bc6a0f9e1baebff70f12b117c8.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/3e3a73bc6a0f9e1baebff70f12b117c8.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/d35a5efd0573d8e7e9597136ec148dbc.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/d35a5efd0573d8e7e9597136ec148dbc.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/0f7b1c1a0e885cf927236b49cf1cbdf4.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/0f7b1c1a0e885cf927236b49cf1cbdf4.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/45cbe13abe41398188813cada210bb2b.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/45cbe13abe41398188813cada210bb2b.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	$card = array([
		'type' => 'image',
		'originalContentUrl' => 'https://www.img.in.th/images/44f1e95bdfcec6738f5f1fe790a36472.jpg',
		'previewImageUrl' => 'https://www.img.in.th/images/44f1e95bdfcec6738f5f1fe790a36472.md.jpg'
	      ]);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	
	$card = array([
     'type' => 'template',
	"altText" => 'ออกแบบภาพโฆษณาคุณภาพ แต่ง-ถ่ายภาพสินค้า ราคาโดน สำหรับธุรกิจของท่าน',
	"template" => array(
	    'type' => 'buttons',
	    'text' => 'ตัวอย่างผลงาน ไดคัตและแต่งภาพสินค้า หากสนใจงานคุณภาพ ราคาถูก สำหรับธุรกิจและร้านค้าของคุณ สามารถสอบถามรายละเอียดเพิ่มเติมได้เลยนะครับ',
	    'actions' =>  array([
		  'type' => 'uri',
		 'label' => 'สอบถามรายละเอียด',
		 'uri' => 'line://ti/p/%40giy8621v'
		])
	    )
	]
	);
	 $data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);
	//last();
}

else if ($textIn == '.') {
	
	$strUrl = 'https://api.line.me/v2/bot/message/push';
	$card = array([
			'type' => 'text',
			'text' => $arrJson['events'][0]['source']['groupId']
		      ]);
	
	 $data = array('to' => 'C5ca58854e5e7ae33964770acadc0211d', 'messages' => $card);
	 send($data, $strUrl, $arrHeader);

	
}
if($arrJson['events'][0]['source']['groupId'] == ''){
	
	$strUrl = 'https://api.line.me/v2/bot/message/reply';
	$card = array([
					'type' => 'text',
					'text' => "ขออภัยครับ ไลน์นี้ไม่สามารถตอบกลับได้ โปรดแอดไลน์ line://ti/p/gkw1117o"
				      ],[
     'type' => 'template',
	"altText" => 'โปรติดต่อเรากลับอีกครั้ง ขออภัยในความไม่สะดวกครับ',
						"template" => array(
						    'type' => 'buttons',
	'text' => 'หรือกดปุ่ม "ติดต่อเรา" สำหรับการสอบถามรายละเอียดบริการ ขออภัยในความไม่สะดวกครับ',
						    'actions' =>  array([
						  'type' => 'uri',
						 'label' => 'ติดต่อเรา',
						 'uri' => 'line://ti/p/gkw1117o'
						])
	  					  )
	]
	);
	
	 $data = array('replyToken' => $arrJson['events'][0]['replyToken'], 'messages' => $card);
	 send($data, $strUrl, $arrHeader);

}
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
 
function last(){
	
$access_token = 'kimeIkhXon3CjV2oBQDdvzI15V7Fe0eIt7gvjAVghuSyvAkhQYJ+fb/M4XQdLe/sQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aISKQnm12R2OjRnrIwKZTywvZtwfusYYzCcp0veGI/U7QdB04t89/1O/w1cDnyilFU=';
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
$textIn = $arrJson['events'][0]['message']['text'];
$idIn = $arrJson['events'][0]['source']['userId'];
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$access_token}";
 $strUrl = 'https://api.line.me/v2/bot/message/push';
	$card = array([
			     'type' => 'template',
				"altText" => 'สอนโปรโมท โพสต์โฆษณาในไลน์อย่างไรให้เด่น สร้างความแตกต่าง',
				"template" => array(
				    'type' => 'buttons',
				    'text' => 'เรียนออนไลน์ โพสต์โฆษณาบนไลน์อย่างไรให้เด่น สร้างความแตกต่างให้น่าสนใจ ฟีเจอร์แปลกๆ เพียบ! สอนหมดไม่หมกเม็ด สอนออนไลน์ฟรีเพียง 1 กลุ่ม ไม่มีค่าใช้จ่าย 100% รีบเข้าสำรองคอร์สก่อนกลุ่มเต็ม!',
				    'actions' =>  array([
					  'type' => 'uri',
					 'label' => '➡ เข้าร่วมคอร์สนี้',
					 'uri' => 'line://ti/p/%40gkw1117o'
					])
				    )
				]
				);
	$data = array('to' => $arrJson['events'][0]['source']['groupId'], 'messages' => $card);
	 
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

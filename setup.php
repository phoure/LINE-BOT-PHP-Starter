<?php
$access_token = 'kimeIkhXon3CjV2oBQDdvzI15V7Fe0eIt7gvjAVghuSyvAkhQYJ+fb/M4XQdLe/sQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aISKQnm12R2OjRnrIwKZTywvZtwfusYYzCcp0veGI/U7QdB04t89/1O/w1cDnyilFU=';
if($_GET['post'] == '1'){
	$groupid[] = array('C5ca58854e5e7ae33964770acadc0211d','test');

		if($_GET['banner'] == 'otop'){
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
		}
	
		
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
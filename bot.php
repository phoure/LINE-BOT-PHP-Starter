<?php
 
$strAccessToken = "qNTXzzZpk6jEk57U46RK5iuyMyCjQRgF3GYrEyFOxBasHkdwuGeMMPdViCDbhvFnxB9nEFqGV7B3rrNr14cQjMh1LzeKooYfaxqwmwsCJQGR6x5keAIp7+It88/ShT0XWC+QuAvBtzZpRlCWBvdcaAdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

$textIn = $arrJson['events'][0]['message']['text'];

if (strpos($textIn, 'twitter.com') !== false) {
 
 require 'app_tokens.php';
 require 'tmhOAuth.php';

 $connection = new tmhOAuth(array(
   'consumer_key'    => $consumer_key,
   'consumer_secret' => $consumer_secret,
   'user_token'      => $user_token,
   'user_secret'     => $user_secret
 ));



  $connection->request('GET', $connection->url('1.1/statuses/show'), array(
  'id' => '997998885665628160', 'tweet_mode' => 'extended'));
          
                
  // Get the HTTP response code for the API request
  $response_code = $connection->response['code'];

  // Convert the JSON response into an array
  $response_data = json_decode($connection->response['response'],true);

  // A response code of 200 is a success


       $max = array(intval($response_data['extended_entities']['media'][0]['video_info']['variants'][0][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][1][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][2][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][3][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][4][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][5][bitrate]));



  $response_code = $connection->response['code'];

  $response_data = json_decode($connection->response['response'],true);

  if ($response_code == 200) {
    $maxs = array_search(max($max), $max);
   
    $data = array();
    $data['replyToken'] = $arrJson['events'][0]['replyToken'];
    $data['messages'][0]['type'] = "text";
    $data['messages'][0]['text'] = $response_data['extended_entities']['media'][0]['video_info']['variants'][0]['url'];
  }

}



if($_GET['post'] == '1'){
	
	$groupid[] = array('C214e858f2c0e42285b5d56a12f0cfced','test');
	$groupid[] = array('Cdcbc1ac3c747ec546fdd194c0fbf7b1f','clipgaysab');
	$groupid[] = array('C16bffe43b165df3429a722dde84adcfc','konrakphone');
	$groupid[] = array('C5acee5a1fea67f1e79201ded58d1f91d','gkawanrak');
	$groupid[] = array('C04ae8ed4e3d9f6e8de35cd48639b85c0','peodkkongwao1');
	$groupid[] = array('C19be33210e004052910aba5a817621e2','peodklongwao');
	$groupid[] = array('Cd08afe8945428db31485bca7effc88a2','mangkonnimitr');
	for ($x = 0; $x <= count($groupid)-1; $x++) {
    $card = array(
     [
     'type' => 'template',
        "altText" => '🎬 แชร์วีดีโอ',
        "template" => array(
            'type' => 'buttons',
            'thumbnailImageUrl' => $_GET['thumb'],
            'imageAspectRatio' => 'rectangle',
            'imageSize' => 'cover',
            'imageBackgroundColor' => '#000000',
            'text' => str_replace('-', ' ', $_GET['title']),
            'defaultAction' =>  array(
                 'type' => 'uri',
                 'label' => 'ดูคลิปนี้',
                 'uri' => 'http://drivegay.com/video/'.$_GET['id'].'&ref='.$groupid[$x][1]
            ),
            'actions' =>  array(['type' => 'uri',
                 'label' => '🎬 ดูคลิปนี้',
                 'uri' => 'http://drivegay.com/video/'.$_GET['id'].'&ref='.$groupid[$x][1]
                ])
            )
        ]
        );
        $data = array('to' => $groupid[$x][0], 'messages' => $card

    );
}
		$url = 'https://api.line.me/v2/bot/message/push';
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
curl_close ($ch);
 
?>
